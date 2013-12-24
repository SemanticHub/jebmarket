<?php

/**
 * This is the model class for table "jebapp_user_details".
 *
 * The followings are the available columns in table 'jebapp_user_details':
 * @property integer $id
 * @property string $f_name
 * @property string $l_name
 * @property string $organization
 * @property string $address1
 * @property string $address2
 * @property string $location
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $zip
 * @property string $phone
 * @property string $fax
 * @property string $avater
 *
 * The followings are the available model relations:
 * @property User[] $users
 */
class UserDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_user_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('f_name, l_name, organization, zip', 'length', 'max'=>100),
			array('address1, address2', 'length', 'max'=>255),
			array('phone, fax', 'length', 'max'=>45),
			array('phone, fax', 'numerical'),
			array('location, zip, phone, fax, avater', 'safe'),
            array('avater',
                'file',
                'allowEmpty' => true,
                'types' => 'jpg, jpeg, gif, png',
                'maxSize' => 1024 * 1024 * 5, // 50MB
                'tooLarge' => 'The file was larger than 5MB. Please upload a smaller file.',
            ),
			array('id, f_name, l_name, organization, address1, address2, location, zip, phone, fax, avater', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'users' => array(self::HAS_MANY, 'User', 'user_details_id'),
			'userLocation' => array(self::HAS_ONE, 'Location', 'id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'f_name' => Yii::t('phrase','First Name'),
			'l_name' => Yii::t('phrase','Last Name'),
			'organization' => Yii::t('phrase','Organization'),
			'address1' => Yii::t('phrase','Address'),
			'address2' => Yii::t('phrase','Address Line 2'),
			'country' => Yii::t('phrase','Country'),
			'state' => Yii::t('phrase','State'),
			'city' => Yii::t('phrase','City'),
			'zip' => Yii::t('phrase','Zip'),
			'phone' => Yii::t('phrase','Phone'),
			'fax' => Yii::t('phrase','Fax'),
			'avater' => Yii::t('phrase','Avatar')
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('f_name',$this->f_name,true);
		$criteria->compare('l_name',$this->l_name,true);
		$criteria->compare('organization',$this->organization,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('avater',$this->avater,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * Get either a Gravatar URL or complete image tag for a specified email address.
     * string $email The email address
     * string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
     * string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
     * string $r Maximum rating (inclusive) [ g | pg | r | x ]
     * boole $img True to return a complete IMG tag False for just the URL
     * array $atts Optional, additional key/value attributes to include in the IMG tag
     * String containing either just a URL or a complete image tag
     */
    public function gravatar( $email, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
        $url = 'http://www.gravatar.com/avatar/';
        $url .= md5( strtolower( trim( $email ) ) );
        $url .= "?s=$s&d=$d&r=$r";
        if ( $img ) {
            $url = '<img src="' . $url . '"';
            foreach ( $atts as $key => $val )
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
        return $url;
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
