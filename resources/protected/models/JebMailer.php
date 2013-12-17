<?php
/**
 * Created by PhpStorm.
 * User: Emon
 * Date: 9/21/13
 * Time: 10:53 PM
 */

require Yii::app()->basePath.'/vendor/phpmailer/class.phpmailer.php';

class JebMailer extends PHPMailer{

    private $_emailTemplate;
    private $_user;
    public  $_vars = array(
        'user' => array(
            'label' => '##USER##',
            'desc' => 'User Username',
            'value' => ''
        ),
        'activation_url' => array(
            'label' => '##ACTIVATION_URL##',
            'desc' => 'Signup activation URL',
            'value' => ''
        ),
        'recoverpass_url' => array(
            'label' => '##RECOVERPASS_URL##',
            'desc' => 'Password Recovery URL',
            'value' => ''
        ),
        'application_name' => array(
            'label' => '##APPLICATION_NAME##',
            'desc' => 'The Application Name',
            'value' => ''
        ),
        'date' => array(
            'label' => '##DATE##',
            'desc' => 'Today Date',
            'value' => ''
        ),
        'date_time' => array(
            'label' => '##DATE_TIME##',
            'desc' => 'Today Date with Time',
            'value' => ''
        ),
        'logo' => array(
            'label' => '##LOGO##',
            'desc' => 'The Application Logo',
            'value' => ''
        ),
    );

    public function __construct($userId=null, $emailTemplateName=null, $guestemail=null, $guestname=null) {
        // Get Email Template
        $this->_emailTemplate = EmailTemplate::model()->findByAttributes(array('name' => $emailTemplateName));
        // Override PHPMailer Default Vars
        $this->From = Yii::app()->params['supportEmail'];
        $this->FromName = "JebMarket";
        $this->isHTML(true);
        $this->initVars();
        $this->Subject = $this->getMailSubject();
        $this->Body = $this->getMailBody();
        $this->AltBody = 'This is the body in plain text for non-HTML mail clients';

        //Its for jebMarket user, who have account in jebMarket
        if($userId && $emailTemplateName) {
            parent::__construct();
            // Get Associate User
            $this->_user = User::model()->findByPk($userId);
            $this->addAddress($this->_user->email, $this->_user->username);
        }

        //Its for guest user, who have no account in jebMarket
        elseif(empty($userId) && !empty($guestemail)) {
            parent::__construct();
            $this->addAddress($guestemail, $guestname);
        }
    }

    private function initVars() {
        $this->_vars['user']['value'] = $this->_user->username;
        $this->_vars['activation_url']['value'] = Yii::app()->createAbsoluteUrl('user/activate', array('email' => $this->_user->email, 'code' => $this->_user->activationcode));
        $this->_vars['recoverpass_url']['value'] = Yii::app()->createAbsoluteUrl('user/resetpass', array('email' => $this->_user->email, 'code' => $this->_user->resetcode));
        $this->_vars['application_name']['value'] = Yii::app()->name;
        $this->_vars['date']['value'] = Yii::app()->dateFormatter->formatDateTime(date("Y-m-d H:i:s"), 'long', null);
        $this->_vars['date_time']['value'] = Yii::app()->dateFormatter->formatDateTime(date("Y-m-d H:i:s"), 'medium', 'short');
        $this->_vars['logo']['value'] =  CHtml::image(Yii::app()->request->getBaseUrl(true).'/images/logo.png');
    }

    public function getVars(){
        foreach ($this->_vars as $k => $v) {
            $temVars[] = $v['label'];
        }
        return $temVars;
    }

    public function getVals(){
        foreach ($this->_vars as $k => $v) {
            $temVals[] = $v['value'];
        }
        return $temVals;
    }

    public function setVarValue($name, $value){
        $this->_vars[$name]['value'] = $value;
    }

    public function getMailBody() {
        return str_replace($this->getVars(), $this->getVals(), $this->_emailTemplate->body );
    }

    public function getMailSubject() {
        return str_replace($this->getVars(), $this->getVals(), $this->_emailTemplate->subject );
    }
} 