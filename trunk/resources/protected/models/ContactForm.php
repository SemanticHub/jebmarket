<?php

/**
 * ContactForm is the data structure for keeping
 */
class ContactForm extends CFormModel {
	public $name;
	public $email;
	public $subject;
	public $body;
	public $verifyCode;

	/**
	 * Declares the validation rules.
	 */
	public function rules() {
		return array(
			array('name, email, subject, body', 'required'),
			array('name', 'length', 'max' => 80),
            array('subject', 'length', 'max' => 255),
            array('email', 'email'),
            array('email', 'length', 'max' => 80),
			array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels() {
		return array(
			'verifyCode'=>'Verification Code',
		);
	}
}