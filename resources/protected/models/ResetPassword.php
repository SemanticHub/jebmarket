<?php

/**
 * Reset Password Form Model class.
 * Form Model is the data structure for keeping
 * change passowrd form data. It is used by the 'password' action of 'UserController'.
 */
class ResetPassword extends CFormModel {
    public $new_password;

    private $_identity;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            array('new_password', 'required'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'new_password' => 'New Password',
        );
    }
}
