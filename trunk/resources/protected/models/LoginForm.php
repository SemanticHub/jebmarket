<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
    public $username;
    public $password;
    public $rememberMe;

    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            // username and password are required
            array('username, password', 'required'),
            // rememberMe needs to be a boolean
            array('rememberMe', 'boolean'),
            // password needs to be authenticated
            array('password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'username' => 'Username / Email',
            'rememberMe' => 'Remember me next time',
        );
    }

    /**
     * Authenticates the password.
     * This is the 'authenticate' validator as declared in rules().
     * 'authenticate' returns following errorCodes
     * 0 = ERROR_NONE
     * 1 = ERROR_USERNAME_INVALID
     * 2 = ERROR_PASSWORD_INVALID
     * 3 = ERROR_USER_NOT_ACTIVATED
     * 100 = ERROR_UNKNOWN_IDENTITY
     */
    public function authenticate($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            if (UserIdentity::ERROR_USERNAME_INVALID == $this->_identity->authenticate())
                $this->addError('username', 'Incorrect username');
            else if (UserIdentity::ERROR_PASSWORD_INVALID == $this->_identity->authenticate()) {
                $this->addError('password', 'Incorrect password');
            } else if (UserIdentity::ERROR_USER_NOT_ACTIVATED == $this->_identity->authenticate()) {
                $this->addError('username', 'You have not yet verify your email address. Please verify your email by clicking on the verification link in the email we sent during registration. '.CHtml::link("Click Here", array('user/sendemailverification', 'user'=>$this->_identity->username),array()).' for resend the verification email');
            }
        }
    }

    /**
     * Logs in the user using the given username and password in the model.
     * @return boolean whether login is successful
     */
    public function login() {
        if ($this->_identity === null) {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_NONE) {
            $duration = $this->rememberMe ? 3600 * 24 * 30 : 0; // 30 days
            Yii::app()->user->login($this->_identity, $duration);
            return true;
        } else
            return false;
    }
}