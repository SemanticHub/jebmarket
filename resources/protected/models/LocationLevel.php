<?php

/**
 * This is the model class for table "jebapp_location_level".
 *
 * The followings are the available columns in table 'jebapp_location_level':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $dial_code
 * @property string $next_level_name
 * @property integer $parent_id
 *
 * The followings are the available model relations:
 * @property Location[] $locations
 */
class LocationLevel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_location_level';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('parent_id', 'numerical', 'integerOnly'=>true),
			array('name, next_level_name', 'length', 'max'=>255),
			array('code', 'length', 'max'=>3),
			array('dial_code', 'length', 'max'=>45),
			array('id, name, code, dial_code, next_level_name, parent_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'locations' => array(self::HAS_MANY, 'Location', 'location_level_id'),
		);
	}

    public function getLevelinfo() {
        $levelName = LocationLevel::model()->findByPk($this->parent_id)->next_level_name;
        $levelName = ($levelName == "") ? 'Country' : $levelName;
        return $this->name . '  [' . $levelName . '] ';
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
			'next_level_name' => Yii::t('phrase','Next Level Name'),
			'parent_id' => Yii::t('phrase','Parent'),
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
		$criteria->compare('next_level_name',$this->next_level_name,true);
		$criteria->compare('parent_id',$this->parent_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LocationLevel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
