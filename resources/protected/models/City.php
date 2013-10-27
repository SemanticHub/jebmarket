<?php

/**
 * This is the model class for table "jebapp_city".
 *
 * The followings are the available columns in table 'jebapp_city':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $area
 * @property integer $state_id
 * @property integer $country_id
 *
 * The followings are the available model relations:
 * @property Country $country
 */
class City extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_city';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name, code, country_id', 'required'),
			array('state_id, country_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('code', 'length', 'max'=>4),
			array('area', 'length', 'max'=>10),
			array('name, code, area, state_id, country_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'country' => array(self::BELONGS_TO, 'Country', 'country_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'name' => Yii::t('phrase','City name'),
			'code' => Yii::t('phrase','City dialing code'),
			'area' => Yii::t('phrase','City area'),
			'state_id' => Yii::t('phrase','State'),
			'country_id' => Yii::t('phrase','Country'),
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('area',$this->area,true);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('country_id',$this->country_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * Retrieves cities of a country
     * @param country_id, the id of the country which states needs to fetch
     * @return CActiveRecord the records found. Null if none is found.
     */

    public function findByCountry($country_id) {
        return $this->findAll(array('condition' => 'country_id = :country_id', 'params' => array(':country_id' => $country_id)));
    }

    /**
     * Retrieves cities of a state
     * @param state_id, the id of the state which cities needs to fetch.
     * @return CActiveRecord the records found. Null if none is found.
     */

    public function findByState($state_id) {
        return $this->findAll(array('condition' => 'state_id = :state_id', 'params' => array(':state_id' => $state_id)));
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return City the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}