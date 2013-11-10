<?php

/**
 * This is the model class for table "jebapp_location".
 *
 * The followings are the available columns in table 'jebapp_location':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $dial_code
 * @property string $area
 * @property integer $location_level_id
 *
 * The followings are the available model relations:
 * @property LocationLevels $locationLevel
 */
class Location extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_location';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('location_level_id', 'numerical', 'integerOnly'=>true),
			array('name, code, dial_code', 'length', 'max'=>255),
			array('area', 'length', 'max'=>45),
			array('id, name, code, dial_code, area, location_level_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'locationLevel' => array(self::BELONGS_TO, 'LocationLevels', 'location_level_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('phrase','ID'),
			'name' => Yii::t('phrase','Name'),
			'code' => Yii::t('phrase','Code'),
			'dial_code' => Yii::t('phrase','Dial Code'),
			'area' => Yii::t('phrase','Area'),
			'location_level_id' => Yii::t('phrase','Parent Location Level'),
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('dial_code',$this->dial_code,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('location_level_id',$this->location_level_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Location the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
