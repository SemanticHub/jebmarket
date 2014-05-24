<?php

/**
 * This is the model class for table "jebapp_store_product_image".
 *
 * The followings are the available columns in table 'jebapp_store_product_image':
 * @property integer $id
 * @property integer $product_id
 * @property integer $media_id
 * @property string $image_file
 * @property string $alt_text
 * @property string $title_txt
 * @property integer $order
 * @property integer $is_default
 * @property string $tag
 *
 * The followings are the available model relations:
 * @property Product $product
 */
class ProductImage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store_product_image';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('product_id', 'required'),
			array('product_id, order, is_default', 'numerical', 'integerOnly'=>true),
			array('image_file, alt_text, title_txt, tag', 'length', 'max'=>255),
			array('id, product_id, image_file, alt_text, title_txt, order, is_default, tag', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
			//'media' => array(self::BELONGS_TO, 'Media', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'media_id' => 'Media',
			'image_file' => 'Image File',
			'alt_text' => 'Alt Text',
			'title_txt' => 'Title Txt',
			'order' => 'Order',
			'is_default' => 'Is Default',
			'tag' => 'Tag',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('media_id',$this->media_id);
		$criteria->compare('image_file',$this->image_file,true);
		$criteria->compare('alt_text',$this->alt_text,true);
		$criteria->compare('title_txt',$this->title_txt,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('is_default',$this->is_default);
		$criteria->compare('tag',$this->tag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductImage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
