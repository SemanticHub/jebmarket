<?php

/**
 * This is the model class for table "jebapp_settings".
 *
 * The followings are the available columns in table 'jebapp_settings':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $options
 * @property string $value
 * @property string $type
 * @property string $validation
 * @property string $tag
 */
class Settings extends CActiveRecord
{

    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_settings';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'unique'),
			array('name, description', 'length', 'max'=>255),
			array('options, value, type, validation, tag', 'length', 'max'=>45),
			// The following rule is used by search().
			array('id, name, description, options, value, type, validation, tag', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => Yii::t('phrase', 'ID'),
			'name' => Yii::t('phrase', 'Name'),
			'description' => Yii::t('phrase', 'Description'),
			'options' => Yii::t('phrase', 'Options (if type is select or multiple)'),
			'value' => Yii::t('phrase', 'Value'),
			'type' => Yii::t('phrase', 'Input Type'),
			'validation' => Yii::t('phrase', 'Validation'),
			'tag' => Yii::t('phrase', 'Tag'),
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
		$criteria->compare('description',$this->description,true);
		$criteria->compare('options',$this->options,true);
		$criteria->compare('value',$this->value,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('validation',$this->validation,true);
		$criteria->compare('tag',$this->tag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    /**
     * @return array, All settings from database group by tag
     */

    public function getParams() {
        $settingsParams = array();
        $settingsItems = Settings::model()->findAll();
        foreach ($settingsItems as $settingsItem) {
            if(!array_key_exists($settingsItem->tag, $settingsParams))
                $settingsParams[$settingsItem->tag] = array();

            $settingsParams[$settingsItem->tag][$settingsItem->name] = $settingsItem;
        }
        return $settingsParams;
    }

    /**
     * @return string used tags as comma separated string
     */

    public static function getTags() {
        $tags = Settings::model()->findAll(array('select'=> 'tag', 'distinct' => true));
        $tagsString = "";
        foreach ($tags as $tag) {
            $tagsString .= $tag->tag . ', ';
        }
        $uniTags = implode(', ',array_unique(explode(', ', $tagsString)));
        return rtrim($uniTags, ', ');
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Settings the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
