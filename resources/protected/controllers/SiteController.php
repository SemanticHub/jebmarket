<?php

class SiteController extends Controller
{

    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     */
    public function actionIndex() {
        $criteria = new CDbCriteria();
        $criteria->condition = "slug ='home-page-view'";
        $slider = Slider::model()->findAll(array('condition' => 'tag=:tag', 'params' => array(':tag' => 'home-slider')));
        $page = Pages::model()->find($criteria);
        $this->render('index', array('page' => $page, 'slider' => $slider));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        $this->performAjaxValidation($model);
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {

                // Contact form email
                $contactmail = new JebMailer("", Yii::app()->params['contactusformemail']);
                $contactmail->From = $model->email;
                $contactmail->FromName = $model->name;
                $contactmail->Subject = $model->subject . ' ' . $contactmail->Subject;
                $contactmail->Body = $model->body . '<br>' . $contactmail->Body;
                $domainname = Website::model()->domainName();
                if (empty($domainname)) {
                    $contactmail->addAddress(Yii::app()->params['adminEmail'], "JebMarket");
                } else {
                    $domain_name = Website::model()->findByAttributes(array('domain' => $domainname));
                    if (empty($domain_name->email)) {
                        $user_email = User::model()->findByPk($domain_name->jebapp_user_id);
                        $contactmail->addAddress($user_email->email, "$domain_name->name");
                    } else {
                        $contactmail->addAddress($domain_name->email, "$domain_name->name");
                    }
                }
                if (!$contactmail->send()) {
                    Yii::app()->user->setFlash('error', 'Mailer Error: ' . $contactmail->ErrorInfo);
                }

                // Respond email after send Contact form
                $respondmail = new JebMailer("", Yii::app()->params['contactusconfirmationemail']);
                $respondmail->addAddress($model->email, $model->name);
                if (!$respondmail->send()) {
                    Yii::app()->user->setFlash('error', 'Mailer Error: ' . $respondmail->ErrorInfo);
                }

                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login Form
     */
    public function actionLogin()
    {
        //$this->redirectWebUser();
        if (!Yii::app()->user->getIsGuest()) {
            $this->redirect(array('dashboard/index'));
        } else {
            $model = new LoginForm;
            $this->performAjaxValidation($model);
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }

            if (isset($_POST['LoginForm'])) {
                $model->attributes = $_POST['LoginForm'];
                // validate user input and redirect to the previous page if valid
                if ($model->validate() && $model->login()) {
                    $userTimezone = User::model()->findByPk(Yii::app()->user->id)->timezone;
                    if ($userTimezone) {
                        Yii::app()->user->setState('timezone', $userTimezone);
                        Yii::app()->setTimeZone($userTimezone); // TODO: can be a filter of base controller to set across the entire application
                    }
                    $this->redirect(array('dashboard/index'));
                }
            }
            // display the login form
            $this->render('login', array('model' => $model));
        }
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    public function redirectWebUser(){
        //CVarDumper::dump(Yii::app()->user->getReturnUrl());
        //CVarDumper::dump(Yii::app()->request->getUrlReferrer());
    }
}