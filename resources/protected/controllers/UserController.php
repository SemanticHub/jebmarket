<?php
class UserController extends Controller {

    /**
     * @var string the default layout for the views.
     */
    public $layout = '//layouts/column2';

    /**
     * Declares class-based actions.
     * 'captcha' action renders the CAPTCHA image displayed on the contact page
     */
    public function actions() {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFCFCFC,
                'testLimit' => 2
            )
        );
    }

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'rights'
        );
    }

    /**
     * @return string
     * Actions those will always allow
     */
    public function allowedActions() {
        return 'signup, captcha, activate, recoverpass, resetpass, sendemailverification, sendajaxverification';
    }

    /**
     * Password Recovery
     */
    public function actionRecoverpass() {
        $model = new Recover();
        if (isset($_POST['Recover'])) {
            $model->attributes = $_POST['Recover'];
            if ($model->validate()) {
                $user = User::model()->findByAttributes(array('username' => $model->username));
                if ($user === null)
                    $user = User::model()->findByAttributes(array('email' => $model->username));
                if ($user === null) {
                    throw new CHttpException(503, 'The requested User does not exists in our system.');
                } else {
                    $user->resetcode = $user->generateResetCode($user->email, $user->salt, $user->activationcode);

                    if ($user->update()) {
                        $mail = new JebMailer($user->id, Yii::app()->params['passRecoveryEmailTemplate']);
                        if (!$mail->send()) {
                            Yii::app()->user->setFlash('error', 'Mailer Error: ' . $mail->ErrorInfo);
                            return false;
                        }
                        Yii::app()->user->setFlash('success', "Password recovery instructions has sent to your email account. Please check your email for details");
                        $this->redirect(array('site/login'));
                        Yii::app()->end();
                    } else {
                        throw new CHttpException(503, 'System alert. Please ask for contact support');
                    }
                }
            }
        }
        // display the change password form
        $this->render('recover', array('model' => $model));
    }

    /**
     * Update User Profile Fields
     */
    public function actionEdit() {
        $es = new EditableSaver('User');
        $es->update();
    }

    /**
     * Displays the Change Password Form and Change Password Action
     */
    public function actionChangepass() {
        $model = new Password;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'change-password-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        // collect user input data
        if (isset($_POST['Password'])) {
            $model->attributes = $_POST['Password'];
            if ($model->validate()) {
                $user = $this->loadModel(Yii::app()->user->id);
                $user->salt = $user->generateSalt();
                $user->password = $user->hashPassword($model->new_password, $user->salt);
                if ($user->update()) {
                    Yii::app()->user->setFlash('success', "New Password Updated Successfully");
                } else {
                    Yii::app()->user->setFlash('danger', "An Error Occurred While Changing New Password");
                }
            }
        }
        // display the change password form
        $this->render('password', array('model' => $model));
    }

    /**
     * Displays the Reset Password Form and Reset Password Action
     */
    public function actionResetpass($email, $code) {
        if(!empty($email) && !empty($code)) {
            $user = User::model()->findByAttributes(array('email' => $email, 'resetcode' => $code));
            if ($user === null) {
                Yii::app()->user->setFlash('danger', "Invalid reset password link.");
                $this->redirect(array('site/login'));
            } else {
                $model = new ResetPassword();
                if (isset($_POST['ResetPassword'])) {
                    $model->attributes = $_POST['ResetPassword'];
                    if ($model->validate()) {
                        $user->salt = $user->generateSalt();
                        $user->password = $user->hashPassword($model->new_password, $user->salt);
                        $user->resetcode = null;
                        if ($user->update()) {
                            Yii::app()->user->setFlash('success', "New Password Updated Successfully");
                            $this->redirect(array('site/login'));
                            Yii::app()->end();
                        } else {
                            Yii::app()->user->setFlash('danger', "An Error Occurred While Changing New Password");
                        }
                    }
                }
                // display the change password form
                $this->render('reset_password', array('model'=>$model, 'email'=>$email, 'code'=>$code));
            }
        } else {
            Yii::app()->user->setFlash('danger', "Invalid reset password link.");
            $this->redirect(array('site/login'));
        }
    }

    /**
     * Display User Dashboard
     * The starting point of a user
     * @internal @param integet $id, the id of the User model
     */
    public function actionDashboard() {
        $this->render('dashboard');
    }

    /**
     * Displays User Profile.
     * @internal param int $id, the ID of the model to be displayed
     */
    public function actionProfile() {
        $model = User::model()->findByPk(Yii::app()->user->id);
        $userdetails = UserDetails::model()->findByPk($model->user_details_id);
        $this->render('profile', array('model' => $model, 'userdetails' => $userdetails));
    }

    /**
     * Displays User model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionLocation() {
        $user = User::model()->findByPk(Yii::app()->user->id);
        $userDetails = UserDetails::model()->findByPk($user->user_details_id);
        $userDetails->location = $_POST['location_id'];
        if($userDetails->update())
            $this->renderPartial('_location_info', array('ref'=>$userDetails->location), false, true);
    }

    /**
     * Sign-up a User.
     * After sign-up request is successful, the browser will be redirected to the 'view' page.
     * @param  string $shopName register with a shop name
     */
    public function actionSignup($shopName = '') {
        $this->layout = "column1";
        $model = new User;
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            $model->setScenario('ajax');
        } else {
            $model->setScenario('signup');
        }
        $model->userDetails = new UserDetails;
        $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->userDetails->attributes = $_POST['UserDetails'];
            $model->salt = $model->generateSalt();
            $model->password = $model->hashPassword($model->password, $model->salt);
            $model->joined = date("Y-m-d H:i:s");
            $model->activationstatus = '0';
            $model->status = '1';
            $model->activationcode = $model->generateActivationCode($model->email, $model->salt);

            Yii::import('ext.JebGeo');
            $geo = new JebGeo();
            //$geo->setIp('180.234.241.160'); // optional if not set use user ip
            $data = $geo->fetch();
            if(!empty($data['timezoneId']))
                $model->timezone = $data['timezoneId'];

            if ($model->validate()) {
                if ($model->userDetails->save()) {
                    $model->user_details_id = $model->userDetails->id;
                    if ($model->save()) {
                        Rights::assign(Rights::module()->authenticatedName, $model->id);
                        $mail = new JebMailer($model->id, Yii::app()->params['signupEmailTemplate']);
                        if (!$mail->send()) {
                            Yii::app()->user->setFlash('danger', 'Mailer Error: ' . $mail->ErrorInfo);
                        }
                        Yii::app()->user->setFlash('success', "Welcome to JebMarket! <b>".$model->username . "</b>. Your account successfully created, You can now login and explore. You need to verify your Email within next ". Yii::app()->params['emailVerificationLimit']. " days. Check your Email for details.");
                        $this->redirect(array('site/login'));
                    }
                }
            } else {
                $model->password = "";
            }
        }
        $this->render('signup', array('model' => $model));
    }

    public function actionStep1() {
        $this->layout = false;
        Yii::app()->clientScript->scriptMap=array('jquery.js'=>false);
        $model = new User;
        $model->setScenario('ajax');
        $model->userDetails = new UserDetails;
        $this->performAjaxValidation($model);
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->userDetails->attributes = $_POST['UserDetails'];
            $login = new LoginForm;
            $login->username = $model->email;
            $login->password = $model->password;
            $model->salt = $model->generateSalt();
            $model->password = $model->hashPassword($model->password, $model->salt);
            $model->joined = date("Y-m-d H:i:s");
            $model->activationstatus = '0';
            $model->status = '1';
            $model->username = $model->email;
            $model->activationcode = $model->generateActivationCode($model->email, $model->salt);

            Yii::import('ext.JebGeo');
            $geo = new JebGeo();
            //$geo->setIp('180.234.241.160'); // optional if not set use user ip
            $data = $geo->fetch();
            if(!empty($data['timezoneId']))
                $model->timezone = $data['timezoneId'];

            if ($model->validate()) {
                if ($model->userDetails->save()) {
                    $model->user_details_id = $model->userDetails->id;
                    if ($model->save()) {
                        Rights::assign(Rights::module()->authenticatedName, $model->id);
                        Rights::assign(Yii::app()->request->getParam('name'), $model->id);
                        $mail = new JebMailer($model->id, Yii::app()->params['signupEmailTemplate']);
                        if (!$mail->send()) {
                            Yii::app()->user->setFlash('danger', 'Mailer Error: ' . $mail->ErrorInfo);
                        }
                        $login->login();
                        echo 'hide';
                    }
                }
            } else {
                $model->password = "";
            }
        }else{
            $this->render('step1', array('model' => $model));
        }
    }

    public function actionStep2() {
        $this->layout = false;
        Yii::app()->clientScript->scriptMap=array('jquery.js'=>false, 'jquery.yiiactiveform.js'=>false);
        $model = new Website;
        $this->performAjaxValidation($model);
        if (isset($_POST['Website'])) {
            $model->attributes=$_POST['Website'];
            $model->jebapp_user_id = Yii::app()->user->id;
            if ($model->validate()) {
                if ($model->save()) {
                    echo 'hide';
                }
            }
        }else{
            $this->render('step2', array('model' => $model));
        }
    }

    public function actionStep3() {
        $this->layout = false;
        Yii::app()->clientScript->scriptMap=array('jquery.js'=>false);
        $this->render('step3');
    }

    /**
     * Creates a new User.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new User;
        $model->userDetails = new UserDetails;
        $model->activationstatus = '0';
        $model->status = '1';
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->salt = $model->generateSalt();
            $model->password = $model->hashPassword($model->password, $model->salt);
            $model->joined = date("Y-m-d H:i:s");
            $model->activationstatus = '0';
            $model->status = '1';
            $model->activationcode = $model->generateActivationCode($model->email, $model->salt);

            if ($model->userDetails->save()) {
                $model->user_details_id = $model->userDetails->id;
                if ($model->save()) {
                    Rights::assign(Rights::module()->authenticatedName, $model->id);
                    $mail = new JebMailer($model->id, 'signup_activation_email');
                    if (!$mail->send()) {
                        Yii::app()->user->setFlash('error', 'Mailer Error: ' . $mail->ErrorInfo);
                    }
                    Yii::app()->user->setFlash('success', 'New User "'. $model->username .'" successfully created, User verification email is sent to '. $model->email);
                    $this->redirect(array('view', 'id' => $model->id));
                }
            }
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular User.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $model->password = "";
        $this->performAjaxValidation($model);

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if($model->password != "") {
                $model->password = $model->hashPassword($model->password, $model->salt);
            } else {
                unset($model->password);
            }
            if ($model->save()) {
                Rights::assign($_POST['user_role'], $model->id);
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $user = $this->loadModel($id);
        $userDetails = UserDetails::model()->findByPk($user->user_details_id);
        $user->delete();
        $userDetails->delete();
        //$this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Activate a registered user email.
     * If activation is successful, the browser will be redirected to the 'login' page else the error message will show
     * @param string $email , the email of the user
     * @param string $code , the activationcode of the user
     * @throws CHttpException
     */
    public function actionActivate($email, $code){
        $model = User::model()->findByAttributes(array('email' => $email));
        if ($model === null) {
            throw new CHttpException(503, 'The requested User does not exists in our system.');
        } else if ($model->activationcode !== $code) {
            throw new CHttpException(503, 'Invalid activation code.');
        } else {
            $model->activationstatus = 1;
            $model->status = 1;
            if($model->save()) {
                Yii::app()->user->setFlash('success', "Thanks for verify your email, Your account has been successfully activated.");
                $this->redirect(array('site/login'));
            }
        }
    }
    public function actionSendajaxverification(){
        if(Yii::app()->user->id) {
            $user = User::model()->findByPk(Yii::app()->user->id);
            $mail = new JebMailer($user->id, Yii::app()->params['signupEmailTemplate']);
            if (!$mail->send()) {
                Yii::app()->user->setFlash('danger', 'Mailer Error: ' . $mail->ErrorInfo);
                $this->renderPartial('/site/_flash_messages');
                //return false;
                Yii::app()->end();
            } else {
                Yii::app()->user->setFlash('success', "Instructions has resent to your email account. Please check your email for details");
                $this->renderPartial('/site/_flash_messages');
            }
        }
    }

    /**
     * Resend verification Email
     */
    public function actionSendemailverification($user){
        if ($user === null) {
            throw new CHttpException(503, 'The requested User does not exists in our system.');
        } else {
            $user = User::model()->findByAttributes(array('username' => $user));
            if ($user === null) $user = User::model()->findByAttributes(array('email' => $user));
            $mail = new JebMailer($user->id, Yii::app()->params['signupEmailTemplate']);
            if (!$mail->send()) {
                Yii::app()->user->setFlash('danger', 'Mailer Error: ' . $mail->ErrorInfo);
                return false;
            }
            Yii::app()->user->setFlash('success', "Instructions has resent to your email account. Please check your email for details");
            if(!Yii::app()->user->id) {
                $this->redirect(array('site/login'));
            } else {

            }
            Yii::app()->end();
        }
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new User('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['User']))
            $model->attributes = $_GET['User'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return User the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = User::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param User $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        } elseif (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form-2') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}