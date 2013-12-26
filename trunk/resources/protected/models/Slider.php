<?php

/**
 * This is the model class for table "jebapp_slider".
 *
 * The followings are the available columns in table 'jebapp_slider':
 * @property integer $id
 * @property string $headline
 * @property string $content
 * @property string $image
 * @property string $tag
 * @property integer $order
 * @property string $class
 */
class Slider extends CActiveRecord {

    public $oldSlideImage;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'jebapp_slider';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            array('headline, content, image', 'required'),
            array('image', 'unique', 'message' => 'Image name already used, please change the image name.'),
            array('order', 'numerical', 'integerOnly' => true),
            array('headline', 'length', 'max' => 255),
            array('tag, class', 'length', 'max' => 45),
            array('content', 'safe'),
            array('id, headline, content, tag, order, class', 'safe', 'on' => 'search'),
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
            'id' => Yii::t('phrase', 'ID'),
            'headline' => Yii::t('phrase', 'Headline'),
            'content' => Yii::t('phrase', 'Content'),
            'image' => Yii::t('phrase', 'Image'),
            'tag' => Yii::t('phrase', 'Tag'),
            'order' => Yii::t('phrase', 'Order'),
            'class' => Yii::t('phrase', 'CSS Class'),
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

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('headline', $this->headline, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('image', $this->image, true);
        $criteria->compare('tag', $this->tag, true);
        $criteria->compare('order', $this->order);
        $criteria->compare('class', $this->class, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Slider the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
