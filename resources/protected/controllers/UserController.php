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
                'backColor' => 0xFFFFFF,
            )
        );
    }

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            //'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
            'rights'
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow',
                'actions' => array('signup', 'captcha', 'success', 'recover'),
                'users' => array('*'),
            ),
            array('allow',
                'actions' => array('profile', 'dashboard', 'password', 'edit'),
                'users' => array('@'),
            ),
            array('allow',
                'actions' => array('admin', 'delete', 'profile'),
                'users' => array('admin'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    /**
     * Password Recovery
     */
    public function actionRecover() {
        $model = new Recover();
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'password-recover-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        // collect user input data
        if (isset($_POST['Recover'])) {
            $model->attributes = $_POST['Recover'];
            if ($model->validate()) {
                $user = $this->loadModel($model->username);

                Yii::app()->user->setFlash('success', "Please follow the instruction sent to your Email to recover your password.");
            }
        }
        // display the change password form
        $this->render('recover', array('model' => $model));
    }

    /**
     * Update User Profile Fields
     */
    public function actionEdit() {
        $model = new User;
        $model->userDetails = new UserDetails;
        $this->render('profile_edit', array('model' => $model));
    }

    /**
     * Displays the Change Password Form and Change Password Action
     */
    public function actionPassword() {
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
     * Display User Dashboard
     * The starting point of a user
     * @internal @param integet $id, the id of the User model
     */
    public function actionDashboard() {
        $id = Yii::app()->user->id;
        $this->render('dashboard',
            array(
                'model' => $this->loadModel($id)
            )
        );
    }

    /**
     * Displays User Profile.
     * @internal param int $id, the ID of the model to be displayed
     */
    public function actionProfile() {
        $id = Yii::app()->user->id;
        $this->render('profile', array(
            'model' => $this->loadModel($id),
        ));
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

    /**
     * Displays User Pending Activation model.
     * @param integer $id the ID of the model to be displayed
     * @param string $store , the name of the store
     */
    public function actionSuccess($id, $store) {
        $this->layout = "column1";
        $this->render('success', array(
            'model' => $this->loadModel($id),
            'store' => $store
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @deprecated
     */
    public function actionCreate() {
        $model = new User;
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Sign-up a User.
     * After sign-up request is successful, the browser will be redirected to the 'view' page.
     * @param  string $shopName register with a shop name
     */
    public function actionSignup($shopName = '') {
        $this->layout = "column1";
        $model = new User;
        $model->userDetails = new UserDetails;

        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            $model->salt = $model->generateSalt();
            $model->password = $model->hashPassword($model->password, $model->salt);
            $model->joined = date("Y-m-d H:i:s");
            //TODO: Let user 7 day to explore the account, then disable the account (activationstatus=0) again.
            $model->activationstatus = '1';
            $model->status = '0';
            $model->activationcode = $model->generateActivationCode($model->email, $model->salt);

            if ($model->userDetails->save()) {
                $model->user_details_id = $model->userDetails->id;
                if ($model->save()) {
                    $mail = new JebMailer($model->id, 'signup_activation_email');
                    if (!$mail->send()) {
                        Yii::app()->user->setFlash('error', 'Mailer Error: ' . $mail->ErrorInfo);
                    }
                    $this->redirect(array('success', 'id' => $model->id, 'store' => $shopName));
                }
            }
        }
        $this->render('signup', array('model' => $model));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     * @deprecated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $this->performAjaxValidation($model);
        if (isset($_POST['User'])) {
            $model->attributes = $_POST['User'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
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
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('User');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $this->layout = "column1";
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
        }
    }
}