<?php

/**
 * This is the model class for table "jebapp_user".
 *
 * The followings are the available columns in table 'jebapp_user':
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $salt
 * @property string $joined
 * @property string $activationcode
 * @property string $activationstatus
 * @property string $status
 * @property string $last_login
 * @property string $timezone
 * @property integer $user_details_id
 *
 * The followings are the available model relations:
 * @property UserDetails $userDetails
 */
class User extends CActiveRecord {

    public $verifyCode;
    
    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'jebapp_user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            array('username, email, password', 'required'),
            array('email', 'email'),
            array('email, username', 'unique'),
            array('username, email', 'length', 'max' => 45),
            array('password', 'length', 'max' => 255),
            array('last_login', 'safe'),
            array('id, username, email, joined, activationstatus, last_login, status', 'safe', 'on' => 'search'),
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
            'userDetails' => array(self::BELONGS_TO, 'UserDetails', 'user_details_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'joined' => 'Joined',
            'activationstatus' => 'Status',
            'status' => 'Activated?',
            'last_login' => 'Last Login',
            'timezone' => 'Timezone',
            'verifyCode'=>'Verification Code',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        $criteria = new CDbCriteria;
        $criteria->compare('username', $this->username, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('salt', $this->salt, true);
        $criteria->compare('joined', $this->joined, true);
        $criteria->compare('activationstatus', $this->activationstatus, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('last_login', $this->last_login, true);
        $criteria->compare('timezone', $this->timezone, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * Checks if the given password is correct.
     * @param string the password to be validated
     * @return boolean whether the password is valid
     */
    public function validatePassword($password) {
        return $this->hashPassword($password, $this->salt) === $this->password;
    }

    /**
     * Create activation code.
     * @param string $email
     * @param $salt
     * @return string activationCode
     */
    public function generateActivationCode($email, $salt) {
        return sha1(mt_rand(10000, 99999) . time() . $email . $salt);
    }

    /**
     * Generates the password hash.
     * @param string password
     * @param string salt
     * @return string hash
     */
    public function hashPassword($password, $salt) {
        return md5($salt . $password);
    }

    /**
     * Generates a salt that can be used to generate a password hash.
     * @return string the salt
     */
    public function generateSalt() {
        return uniqid('', true);
    }
}