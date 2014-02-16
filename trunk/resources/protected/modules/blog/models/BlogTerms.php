<?php

/**
 * This is the model class for table "jebapp_blog_terms".
 *
 * The followings are the available columns in table 'jebapp_blog_terms':
 * @property string $term_id
 * @property string $name
 * @property string $slug
 * @property string $taxonomy
 * @property string $description
 * @property string $parent
 * @property string $count
 * @property integer $jebapp_user_id
 *
 * The followings are the available model relations:
 * @property User $jebappUser
 */
class BlogTerms extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_blog_terms';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('description, name', 'required'),
			array('jebapp_user_id', 'numerical', 'integerOnly'=>true),
			array('name, slug', 'length', 'max'=>200),
            array('slug', 'isSlugValid'),
            array('slug', 'match', 'not' => true, 'pattern' => '/[^a-z0-9_]/', 'message' => 'Invalid characters in friendly URL.'),
			array('taxonomy', 'length', 'max'=>32),
			array('parent, count', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('term_id, name, slug, taxonomy, description, parent, count, jebapp_user_id', 'safe', 'on'=>'search'),
		);
	}

    /**
     * @param $attribute
     * @param $params
     */
    public function isSlugValid($attribute, $params)
    {
        if(!empty($this->slug))
        {
            $record = BlogTerms::model()->findByAttributes(array('taxonomy' => $this->taxonomy, 'slug' => $this->slug, 'jebapp_user_id' => Yii::app()->user->id));
            if(!empty($record->slug))
            {
                $this->addError($attribute, 'URL has already been taken.');
            }
        }
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'term_id' => 'Term',
			'name' => 'Name',
			'slug' => 'Slug',
			'taxonomy' => 'Taxonomy',
			'description' => 'Description',
			'parent' => 'Parent',
			'count' => 'Count',
			'jebapp_user_id' => 'User ID',
		);
	}

    public function searchtag()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('term_id',$this->term_id,true);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('slug',$this->slug,true);
        $criteria->compare('taxonomy',$this->taxonomy = 'tag',true);
        $criteria->compare('description',$this->description,true);
        $criteria->compare('parent',$this->parent,true);
        $criteria->compare('count',$this->count,true);
        $criteria->compare('jebapp_user_id',$this->jebapp_user_id = Yii::app()->user->id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    public function searchcategory()
    {
        $criteria=new CDbCriteria;

        $criteria->compare('term_id',$this->term_id,true);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('slug',$this->slug,true);
        $criteria->compare('taxonomy',$this->taxonomy = 'category',true);
        $criteria->compare('description',$this->description,true);
        $criteria->compare('parent',$this->parent,true);
        $criteria->compare('count',$this->count,true);
        $criteria->compare('jebapp_user_id',$this->jebapp_user_id = Yii::app()->user->id);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * @return bool
     */
    public function beforeSave() {
        $this->jebapp_user_id = Yii::app()->user->id;
        return parent::beforeSave();
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BlogTerms the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
