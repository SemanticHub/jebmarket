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
 * @property string $resetcode
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
    public $full_name;
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
            array('username, email', 'required'),
            array('password', 'required', 'except'=>'update'),
            array('email', 'email'),
            array('email, username', 'unique'),
            array('username, email', 'length', 'max' => 45),
            array('password', 'length', 'max' => 255),
            array('f_name, l_name, full_name, last_login, location, timezone', 'safe'),
            array('id, username, email, joined, activationstatus, status, last_login, status', 'safe', 'on' => 'search'),
            array('verifyCode', 'required', 'on'=>'signup'),
            array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements(), 'on'=>'signup, insert'),
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
            'username' => Yii::t('phrase','Username'),
            'email' => Yii::t('phrase', 'Email'),
            'password' => Yii::t('phrase', 'Password'),
            'joined' => Yii::t('phrase', 'Joined'),
            'activationstatus' => Yii::t('phrase', 'Verified?'),
            'status' => Yii::t('phrase', 'Status'),
            'last_login' => Yii::t('phrase', 'Last Login'),
            'timezone' => Yii::t('phrase', 'Timezone'),
            'verifyCode'=> Yii::t('phrase', 'Verify'),
            'full_name'=> Yii::t('phrase', 'Full Name'),
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
        $criteria->compare('resetcode', $this->resetcode, true);
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
     * Generate activation code.
     * @param string $email
     * @param $salt
     * @return string activationCode
     */
     public function generateActivationCode($email, $salt) {
        return sha1(mt_rand(10000, 99999) . time() . $email . $salt);
     }

    /**
     * Generate reset password code for sending with email
     * @param string $email, associate user's email
     * @param string $salt, the associate user's security salt that has been generate upon registration
     * @param string $activationCode, the associate user's activation code that has been generate upon registration
     * @return string resetCode
     */
     public function generateResetCode($email, $salt, $activationCode) {
        return sha1(mt_rand(10000, 99999) . time() . $email . $salt . $activationCode);
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
     * Generates a salt that can be used to generate a password hash for extra layer of security
     * @return string the salt
     */
    public function generateSalt() {
        return uniqid('', true);
    }

}