<?php

/**
 * This is the model class for table "jebapp_website".
 *
 * The followings are the available columns in table 'jebapp_website':
 * @property integer $id
 * @property string $name
 * @property string $domain
 * @property integer $jebapp_user_id
 *
 * The followings are the available model relations:
 * @property User $jebappUser
 */
class Website extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_website';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, domain, jebapp_user_id', 'required'),
            array('domain', 'match', 'not' => true, 'pattern' => '/[^a-z0-9_-]/', 'message' => 'Invalid characters in domain name.'),
			array('jebapp_user_id', 'numerical', 'integerOnly'=>true),
            array('domain', 'unique'),
			array('name, domain, logo', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, domain, logo, jebapp_user_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'jebappUser' => array(self::BELONGS_TO, 'User', 'jebapp_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Business Name',
			'domain' => 'Domain Name',
            'logo' => 'Logo',
			'jebapp_user_id' => 'Jebapp User',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('domain',$this->domain,true);
        $criteria->compare('logo',$this->logo,true);
		$criteria->compare('jebapp_user_id',$this->jebapp_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * @return array|mixed|null
     */
    public function domainName()
    {
        $rawPathInfo = Yii::app()->request->getPathInfo();
        $path = explode("/",$rawPathInfo);
        $domainname = $this->findByAttributes(array('domain'=>$path[0]));
        if(!empty($domainname->domain)){
            return $domainname->domain;
        }
    }

    /**
     * @return array|mixed|null
     */
    public function logoName()
    {
        $domainname = $this->domainName();
        if(!empty($domainname) || !empty(Yii::app()->user->id)){
            if(isset($domainname)){
                $logo = $this->findByAttributes(array('domain'=>$domainname));
                if(!empty($logo->logo)){
                    return $logo->logo;
                }
            }elseif(isset(Yii::app()->user->id)){
                $logo = Website::findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
                if(!empty($logo->logo)){
                    return $logo->logo;
                }
            }
        }
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Website the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
