<?php

/**
 * Change Password Form Model class.
 * Form Model is the data structure for keeping
 * change passowrd form data. It is used by the 'password' action of 'UserController'.
 */
class Recover extends CFormModel
{
    public $username;

    /**
     * Declares the validation rules.
     * and password needs to be authenticated.
     */
    public function rules()
    {
        return array(
            array('username', 'required'),
            array('username', 'validUser'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'username' => 'Username / Email',
        );
    }

    /**
     * Checks the user (username / email ) is valid and exists in the system
     *
     */
    public function validUser($attribute, $params)
    {
        $data = User::model()->findByAttributes(array('username' => $this->username));
        if ($data === null)
        $data = User::model()->findByAttributes(array('email' => $this->username));
        if ($data === null)
        $this->addError($attribute, 'User does not exists');
    }
}
