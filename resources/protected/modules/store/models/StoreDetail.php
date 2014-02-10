<?php

/**
 * This is the model class for table "jebapp_store_detail".
 *
 * The followings are the available columns in table 'jebapp_store_detail':
 * @property integer $id
 * @property integer $store_id
 * @property integer $location_id
 * @property string $city
 * @property string $address
 * @property string $zip
 * @property string $phone
 * @property string $fax
 * @property string $email
 * @property string $lat
 * @property string $lon
 * @property string $timetable
 * @property string $tag
 * @property string $keyword
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Store $store
 */
class StoreDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('store_id', 'required'),
			array('store_id, location_id', 'numerical', 'integerOnly'=>true),
			array('city, phone, fax, email, lat, lon', 'length', 'max'=>45),
			array('address', 'length', 'max'=>140),
			array('zip', 'length', 'max'=>10),
			array('timetable, tag, keyword, description', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, store_id, location_id, city, address, zip, phone, fax, email, lat, lon, timetable, tag, keyword, description', 'safe', 'on'=>'search'),
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
			'store' => array(self::BELONGS_TO, 'Store', 'store_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'store_id' => 'Store',
			'location_id' => 'Location',
			'city' => 'City',
			'address' => 'Address',
			'zip' => 'Zip',
			'phone' => 'Phone',
			'fax' => 'Fax',
			'email' => 'Email',
			'lat' => 'Lat',
			'lon' => 'Lon',
			'timetable' => 'Timetable',
			'tag' => 'Tag',
			'keyword' => 'Keyword',
			'description' => 'Description',
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
		$criteria->compare('store_id',$this->store_id);
		$criteria->compare('location_id',$this->location_id);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zip',$this->zip,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('lat',$this->lat,true);
		$criteria->compare('lon',$this->lon,true);
		$criteria->compare('timetable',$this->timetable,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StoreDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
