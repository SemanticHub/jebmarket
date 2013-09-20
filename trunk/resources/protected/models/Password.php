<?php

/**
 * Change Password Form Model class.
 * Form Model is the data structure for keeping
 * change passowrd form data. It is used by the 'password' action of 'UserController'.
 */
class Password extends CFormModel
{
    public $old_password;
    public $new_password;

    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            array('old_password, new_password', 'required'),
            array('old_password', 'authenticate'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'old_password' => 'Current Password',
            'new_password' => 'New Password',
        );
    }

    /**
     * Authenticates the old password.
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
        $this->_identity = new UserIdentity(Yii::app()->user->name, $this->old_password);
        if (UserIdentity::ERROR_PASSWORD_INVALID == $this->_identity->authenticate()) {
            $this->addError($attribute, 'Incorrect current password');
        }
    }
}
