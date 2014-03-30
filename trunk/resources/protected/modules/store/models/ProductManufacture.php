<?php

/**
 * This is the model class for table "jebapp_store_product_manufacture".
 *
 * The followings are the available columns in table 'jebapp_store_product_manufacture':
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $logo
 * @property string $website
 * @property string $tag
 */
class ProductManufacture extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store_product_manufacture';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'unique'),
			array('name, logo, website', 'length', 'max'=>45),
			array('description, tag', 'length', 'max'=>255),
			array('id, name, description, logo, website, tag', 'safe', 'on'=>'search'),
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

	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'description' => 'Description',
			'logo' => 'Logo',
			'website' => 'Website',
			'tag' => 'Tag',
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('tag',$this->tag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
