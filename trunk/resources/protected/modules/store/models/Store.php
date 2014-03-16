<?php

/**
 * This is the model class for table "jebapp_store".
 *
 * The followings are the available columns in table 'jebapp_store':
 * @property integer $id
 * @property integer $user_id
 * @property integer $plan_id
 * @property string $name
 * @property integer $status
 * @property integer $visibility
 * @property string $timezone
 * @property string $created
 * @property string $updated
 * @property string $expire
 *
 * The followings are the available model relations:
 * @property StorePlan $plan
 * @property StoreDetail[] $storeDetail
 */
class Store extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, plan_id, name, created', 'required'),
			array('user_id, plan_id, status, visibility', 'numerical', 'integerOnly'=>true),
			array('name, timezone', 'length', 'max'=>45),
			array('updated, expire', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, plan_id, name, status, visibility, timezone, created, updated, expire', 'safe', 'on'=>'search'),
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
			'plan' => array(self::BELONGS_TO, 'StorePlan', 'plan_id'),
			'storeDetail' => array(self::HAS_MANY, 'StoreDetail', 'store_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'plan_id' => 'Plan',
			'name' => 'Name',
			'status' => 'Status',
			'visibility' => 'Visibility',
			'timezone' => 'Timezone',
			'created' => 'Created',
			'updated' => 'Updated',
			'expire' => 'Expire',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('plan_id',$this->plan_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('visibility',$this->visibility);
		$criteria->compare('timezone',$this->timezone,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->compare('expire',$this->expire,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Store the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
