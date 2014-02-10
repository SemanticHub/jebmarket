<?php

/**
 * This is the model class for table "jebapp_store_plan".
 *
 * The followings are the available columns in table 'jebapp_store_plan':
 * @property integer $id
 * @property string $name
 * @property integer $is_default
 * @property string $description
 * @property string $thumb_width_height
 * @property string $image_width_height
 * @property string $image_max_size
 * @property integer $image_per_product
 * @property integer $max_disk_space
 * @property integer $max_bandwidth
 * @property integer $product_per_store
 * @property string $transaction_fee
 * @property integer $transaction_period
 * @property integer $transaction_fee_type
 *
 * The followings are the available model relations:
 * @property Store[] $stores
 */
class StorePlan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_store_plan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('is_default, image_per_product, max_disk_space, max_bandwidth, product_per_store, transaction_period, transaction_fee_type', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>45),
			array('description', 'length', 'max'=>255),
			array('thumb_width_height, image_width_height', 'length', 'max'=>10),
			array('image_max_size', 'length', 'max'=>3),
			array('transaction_fee', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, is_default, description, thumb_width_height, image_width_height, image_max_size, image_per_product, max_disk_space, max_bandwidth, product_per_store, transaction_fee, transaction_period, transaction_fee_type', 'safe', 'on'=>'search'),
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
			'stores' => array(self::HAS_MANY, 'Store', 'plan_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'is_default' => 'Is Default',
			'description' => 'Description',
			'thumb_width_height' => 'Thumb Width Height',
			'image_width_height' => 'Image Width Height',
			'image_max_size' => 'Image Max Size',
			'image_per_product' => 'Image Per Product',
			'max_disk_space' => 'Max Disk Space',
			'max_bandwidth' => 'Max Bandwidth',
			'product_per_store' => 'Product Per Store',
			'transaction_fee' => 'Transaction Fee',
			'transaction_period' => 'Transaction Period',
			'transaction_fee_type' => 'Transaction Fee Type',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('is_default',$this->is_default);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('thumb_width_height',$this->thumb_width_height,true);
		$criteria->compare('image_width_height',$this->image_width_height,true);
		$criteria->compare('image_max_size',$this->image_max_size,true);
		$criteria->compare('image_per_product',$this->image_per_product);
		$criteria->compare('max_disk_space',$this->max_disk_space);
		$criteria->compare('max_bandwidth',$this->max_bandwidth);
		$criteria->compare('product_per_store',$this->product_per_store);
		$criteria->compare('transaction_fee',$this->transaction_fee,true);
		$criteria->compare('transaction_period',$this->transaction_period);
		$criteria->compare('transaction_fee_type',$this->transaction_fee_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StorePlan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
