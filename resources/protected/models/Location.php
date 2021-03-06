<?php

/**
 * This is the model class for table "jebapp_location".
 *
 * The followings are the available columns in table 'jebapp_location':
 * @property integer $id
 * @property string $name
 * @property string $code
 * @property string $dial_code
 * @property string $next_level_name
 * @property integer $parent_id
 * @property string $area
 * @property string $timezone
 * @property string $lang
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
			array('name', 'checkLocationName', 'on' => 'create, insert'),
			array('parent_id', 'numerical', 'integerOnly'=>true),
			array('name, next_level_name', 'length', 'max'=>255),
			array('code', 'length', 'max'=>3),
			array('dial_code', 'length', 'max'=>45),
			array('lang', 'length', 'max'=>45),
			array('id, name, code, dial_code, next_level_name, area, timezone, parent_id, lang', 'safe', 'on'=>'search'),
		);
	}

    /**
     * Custom validation rule for location name
     */

    public function checkLocationName($attribute) {
        if($this->parent_id) {
            $count = Location::count(array('condition' => 'parent_id=:parent_id AND name=:name', 'params' => array(':parent_id' => $this->parent_id, ':name' => $this->name)));
            if($count > 0 ) {
                $this->addError($attribute, 'Location name already exists');
            }
        } else {
            $count = Location::count(array('condition' => 'parent_id IS NULL AND name=:name', 'params' => array(':name' => $this->name)));
            if($count > 0 ) {
                $this->addError($attribute, 'Country already exists');
            }
        }
    }

    /**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			//'locations' => array(self::HAS_MANY, 'Location', 'location_level_id'),
		);
	}

    public function getLevelinfo() {
        $data = Location::model()->findByPk($this->parent_id);
        $levelName = ($data->next_level_name == "" && $data->parent_id == "" ) ? 'Country' : $data->next_level_name;
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
			'area' => Yii::t('phrase','Area'),
			'timezone' => Yii::t('phrase','Timezone'),
			'lang' => Yii::t('phrase','Language'),
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
		$criteria->compare('lang',$this->lang);

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
