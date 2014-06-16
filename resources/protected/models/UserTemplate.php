<?php

/**
 * This is the model class for table "jebapp_user_template".
 *
 * The followings are the available columns in table 'jebapp_user_template':
 * @property integer $id
 * @property string $custom_template
 * @property string $header
 * @property string $footer
 * @property string $custom_js
 * @property string $custom_css
 * @property string $type
 * @property integer $active
 * @property string $create_date
 * @property string $update_date
 * @property integer $jebapp_template_id
 * @property integer $jebapp_user_id
 *
 * The followings are the available model relations:
 * @property Template $jebappTemplate
 * @property User $jebappUser
 */
class UserTemplate extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_user_template';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('jebapp_template_id, jebapp_user_id', 'required'),
			array('active, jebapp_template_id, jebapp_user_id', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>45),
			array('custom_template, header, footer, custom_js, custom_css, create_date, update_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, custom_template, header, footer, custom_js, custom_css, type, active, create_date, update_date, jebapp_template_id, jebapp_user_id', 'safe', 'on'=>'search'),
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
			'jebappTemplate' => array(self::BELONGS_TO, 'Template', 'jebapp_template_id'),
			'jebappUser' => array(self::BELONGS_TO, 'User', 'jebapp_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'custom_template' => 'Custom Template',
            'header' => 'Header',
            'footer' => 'Footer',
			'custom_js' => 'Custom Js',
			'custom_css' => 'Custom Css',
			'type' => 'Type',
			'active' => 'Active',
			'create_date' => 'Create Date',
			'update_date' => 'Update Date',
			'jebapp_template_id' => 'Jebapp Template',
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
		$criteria->compare('custom_template',$this->custom_template,true);
        $criteria->compare('header',$this->header,true);
        $criteria->compare('footer',$this->footer,true);
		$criteria->compare('custom_js',$this->custom_js,true);
		$criteria->compare('custom_css',$this->custom_css,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('create_date',$this->create_date,true);
		$criteria->compare('update_date',$this->update_date,true);
		$criteria->compare('jebapp_template_id',$this->jebapp_template_id);
		$criteria->compare('jebapp_user_id',$this->jebapp_user_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function customCSS()
    {
        $theme = Template::model()->findByAttributes(array('name'=>Yii::app()->theme->name));
        $templates = $this->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id, 'jebapp_template_id' => $theme->id));
        if(!empty($templates->custom_css)){
            return $templates->custom_css;
        }
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserTemplate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
