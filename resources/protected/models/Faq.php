<?php

/**
 * This is the model class for table "jebapp_faq".
 *
 * The followings are the available columns in table 'jebapp_faq':
 * @property integer $id
 * @property string $faq
 * @property string $answer
 * @property integer $order
 * @property string $active
 * @property string $tag
 */
class Faq extends CActiveRecord {
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'jebapp_faq';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('order', 'numerical', 'integerOnly'=>true),
			array('active', 'length', 'max'=>1),
			array('tag', 'length', 'max'=>45),
			array('faq, answer', 'safe'),
			// The following rule is used by search().
			array('id, faq, answer, order, active, tag', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'id' => 'ID',
			'faq' => 'Faq',
			'answer' => 'Answer',
			'order' => 'Order',
			'active' => 'Active',
			'tag' => 'Tag',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search() {
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('faq',$this->faq,true);
		$criteria->compare('answer',$this->answer,true);
		$criteria->compare('order',$this->order);
		$criteria->compare('active',$this->active,true);
		$criteria->compare('tag',$this->tag,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Faq the static model class
	 */
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

    public static function getTags() {
        $tags = Faq::model()->findAll(array('select'=> 'tag', 'distinct' => true));
        $tagsString = "";
        foreach ($tags as $tag) {
            $tagsString .= $tag->tag . ', ';
        }
        $uniTags = implode(', ',array_unique(explode(', ', $tagsString)));
        return rtrim($uniTags, ', ');
    }
}
