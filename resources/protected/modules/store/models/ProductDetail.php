<?php

/**
 * This is the model class for table "jebapp_store_product_detail".
 *
 * The followings are the available columns in table 'jebapp_store_product_detail':
 * @property integer $id
 * @property integer $product_id
 * @property string $description
 * @property string $keyword
 * @property string $meta_description
 * @property string $buy_price
 * @property string $page_title
 *
 * The followings are the available model relations:
 * @property Product $product
 */
class ProductDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store_product_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('product_id', 'required'),
			array('product_id', 'numerical', 'integerOnly'=>true),
			array('keyword, meta_description', 'length', 'max'=>255),
			array('buy_price', 'length', 'max'=>20),
			array('description', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, description, keyword, meta_description, buy_price, page_title', 'safe', 'on'=>'search'),
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
			'product' => array(self::BELONGS_TO, 'Product', 'product_id'),
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
			'description' => 'Description',
			'keyword' => 'Keyword',
			'meta_description' => 'Meta Description',
			'buy_price' => 'Buy Price',
			'page_title' => 'Page Title',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('keyword',$this->keyword,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('buy_price',$this->buy_price,true);
		$criteria->compare('page_title',$this->page_title,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
