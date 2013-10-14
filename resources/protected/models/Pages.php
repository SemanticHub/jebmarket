<?php

/**
 * This is the model class for table "jebapp_pages".
 *
 * The followings are the available columns in table 'jebapp_pages':
 * @property integer $id
 * @property string $active
 * @property string $title
 * @property string $content
 * @property string $slug
 * @property string $meta_desc
 * @property string $meta_keywords
 */
class Pages extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'jebapp_pages';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        return array(
            array('title, slug', 'required'),
            //array('meta_keywords', 'numerical', 'integerOnly' => true),
            array('active', 'length', 'max' => 1),
            array('title, slug', 'length', 'max' => 255),
            array('content, meta_desc, meta_keywords', 'safe'),
            array('id, active, title, content, slug, meta_desc, meta_keywords', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'active' => 'Active',
            'title' => 'Page Title',
            'content' => 'Page Content',
            'slug' => 'Friendly URL',
            'meta_desc' => 'Meta Desc',
            'meta_keywords' => 'Meta Keywords',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('active', $this->active, true);
        $criteria->compare('title', $this->title, true);
        $criteria->compare('content', $this->content, true);
        $criteria->compare('slug', $this->slug, true);
        $criteria->compare('meta_desc', $this->meta_desc, true);
        $criteria->compare('meta_keywords', $this->meta_keywords, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Pages the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
}