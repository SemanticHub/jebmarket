<?php

/**
 * This is the model class for table "jebapp_template".
 *
 * The followings are the available columns in table 'jebapp_template':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $price
 * @property string $color
 * @property string $columns
 * @property string $layout
 * @property string $categories
 * @property string $sub_categories
 * @property string $features
 * @property string $owner_name
 * @property string $owner_email
 * @property string $visibility
 * @property integer $active
 * @property string $create_date
 * @property string $update_date
 * @property integer $jebapp_user_id
 *
 * The followings are the available model relations:
 * @property User $jebappUser
 * @property UserTemplate[] $userTemplates
 */
class Template extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_template';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, owner_email, jebapp_user_id', 'required'),
			array('active, jebapp_user_id', 'numerical', 'integerOnly'=>true),
			array('name, price, color, columns, layout, categories, sub_categories, features, owner_name, owner_email, visibility', 'length', 'max'=>45),
			array('title', 'length', 'max'=>100),
			array('description, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, title, description, price, color, columns, layout, categories, sub_categories, features, owner_name, owner_email, visibility, active, create_date, update_date, jebapp_user_id', 'safe', 'on'=>'search'),
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
			'jebappUser' => array(self::BELONGS_TO, 'User', 'jebapp_user_id'),
			'userTemplates' => array(self::HAS_MANY, 'UserTemplate', 'jebapp_template_id'),
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
			'title' => 'Title',
			'description' => 'Description',
			'price' => 'Price',
			'color' => 'Color',
			'columns' => 'Columns',
			'layout' => 'Layout',
			'categories' => 'Categories',
			'sub_categories' => 'Sub Categories',
			'features' => 'Features',
			'owner_name' => 'Owner Name',
			'owner_email' => 'Owner Email',
			'visibility' => 'Visibility',
			'active' => 'Active',
			'create_date' => 'Create Date',
			'update_date' => 'Update Date',
			'jebapp_user_id' => 'Jebapp User',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('columns',$this->columns,true);
		$criteria->compare('layout',$this->layout,true);
		$criteria->compare('categories',$this->categories,true);
		$criteria->compare('sub_categories',$this->sub_categories,true);
		$criteria->compare('features',$this->features,true);
		$criteria->compare('owner_name',$this->owner_name,true);
		$criteria->compare('owner_email',$this->owner_email,true);
		$criteria->compare('visibility',$this->visibility,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('jebapp_user_id',$this->jebapp_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Template the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
