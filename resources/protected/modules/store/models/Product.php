<?php

/**
 * This is the model class for table "jebapp_store_product".
 *
 * The followings are the available columns in table 'jebapp_store_product':
 * @property integer $id
 * @property integer $type_id
 * @property integer $store_id
 * @property integer $manufacture_id
 * @property integer $status
 * @property string $title
 * @property string $sku
 * @property string $barcode_type
 * @property string $barcode_value
 * @property string $short_details
 * @property string $added
 * @property string $modified
 * @property string $published
 * @property string $price
 * @property integer $quantity
 * @property string $default_image
 *
 * The followings are the available model relations:
 * @property ProductDetail $productDetail
 * @property ProductImage[] $productImages
 * @property ProductCategories[] $productCategories
 * @property ProductManufacture $productManufacture
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store_product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('store_id, status, title, added', 'required'),
			array('store_id, status, quantity', 'numerical', 'integerOnly'=>true),
			array('title, barcode_type', 'length', 'max'=>140),
			array('sku, barcode_value', 'length', 'max'=>64),
			array('short_details, default_image', 'length', 'max'=>255),
			array('price', 'length', 'max'=>20),
			array('modified, type_id, published, manufacture_id, productCategories, productImages', 'safe'),
			array('id, store_id, status, title, sku, barcode_type, barcode_value, short_details, added, modified, published, price, quantity, default_image', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'productDetail' => array(self::HAS_ONE, 'ProductDetail', 'product_id'),
			'productCategories' => array(self::MANY_MANY, 'ProductCategory', 'jebapp_store_product_to_category(product_id, category_id)'),
			'productImages' => array(self::HAS_MANY, 'ProductImage', 'product_id'),
            'productManufacture'=>array(self::BELONGS_TO, 'ProductManufacture', 'manufacture_id'),
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
			'type_id' => 'Product Type',
			'manufacture_id' => 'Manufacture',
			'status' => 'Status',
			'title' => 'Product Title',
			'sku' => 'Sku',
			'barcode_type' => 'Barcode Type',
			'barcode_value' => 'Barcode Value',
			'short_details' => 'Short Details',
			'added' => 'Added',
			'modified' => 'Modified',
			'published' => 'Published',
			'price' => 'Price',
			'quantity' => 'Quantity',
			'default_image' => 'Default Image',
            'productCategories' => 'Categories',
            'productImages' => 'Images'
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
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('store_id',Store::model()->getUserStoreId());
		$criteria->compare('status',$this->status);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('sku',$this->sku,true);
		$criteria->compare('barcode_type',$this->barcode_type,true);
		$criteria->compare('barcode_value',$this->barcode_value,true);
		$criteria->compare('short_details',$this->short_details,true);
		$criteria->compare('added',$this->added,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('published',$this->published,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('default_image',$this->default_image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
