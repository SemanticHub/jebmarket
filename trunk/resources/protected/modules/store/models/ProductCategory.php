<?php

/**
 * This is the model class for table "jebapp_store_product_category".
 *
 * The followings are the available columns in table 'jebapp_store_product_category':
 * @property integer $id
 * @property integer $store_id
 * @property integer $parent_id
 * @property integer $is_root
 * @property string $name
 * @property string $description
 * @property string $meta_description
 * @property string $meta_keyword
 * @property string $image
 * @property integer $shop_default
 * @property integer $status
 * @property integer $visibility
 *
 * The followings are the available model relations:
 * @property Store $store
 */
class ProductCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store_product_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'unique', 'caseSensitive'=>false, 'criteria'=>array('condition'=>'store_id=:store_id','params'=>array(':store_id'=>Store::model()->getUserStoreId()))),
			array('parent_id, is_root, shop_default, status, visibility', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('description, meta_description, meta_keyword, image', 'length', 'max'=>255),
			array('id, store_id, parent_id, is_root, name, description, meta_description, meta_keyword, image, shop_default, status, visibility', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
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
			'parent_id' => 'Parent',
			'is_root' => 'Is Root',
			'name' => 'Name',
			'description' => 'Description',
			'meta_description' => 'Meta Description',
			'meta_keyword' => 'Meta Keyword',
			'image' => 'Image',
			'shop_default' => 'Shop Default',
			'status' => 'Status',
			'visibility' => 'Visibility',
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
		$criteria->compare('store_id',$this->store_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('is_root',$this->is_root);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('meta_keyword',$this->meta_keyword,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('shop_default',$this->shop_default);
		$criteria->compare('status',$this->status);
		$criteria->compare('visibility',$this->visibility);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StoreProductCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
