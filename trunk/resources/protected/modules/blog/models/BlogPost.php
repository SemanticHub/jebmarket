<?php

/**
 * This is the model class for table "jebapp_blog_post".
 *
 * The followings are the available columns in table 'jebapp_blog_post':
 * @property string $id
 * @property string $post_content
 * @property string $post_title
 * @property string $post_name
 * @property string $post_status
 * @property string $comment_status
 * @property string $post_date
 * @property string $post_modified
 * @property string $post_parent
 * @property string $comment_count
 * @property integer $jebapp_user_id
 *
 * The followings are the available model relations:
 * @property BlogComment[] $blogComments
 * @property User $jebappUser
 * @property mixed tag
 * @property mixed category
 */
class BlogPost extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_blog_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('post_content, post_title', 'required'),
			array('jebapp_user_id', 'numerical', 'integerOnly'=>true),
			array('post_name', 'length', 'max'=>200),
			array('post_status, comment_status, post_parent, comment_count', 'length', 'max'=>20),
			array('post_date, post_modified, tag, category', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, post_content, tag, category, post_title, post_name, post_status, comment_status, post_date, post_modified, post_parent, comment_count, jebapp_user_id', 'safe', 'on'=>'search'),
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
			'blogComments' => array(self::HAS_MANY, 'BlogComment', 'jebapp_blog_post_id'),
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
			'post_content' => 'Post Content',
			'post_title' => 'Post Title',
			'post_name' => 'Friendly URL',
			'post_status' => 'Post Status',
			'comment_status' => 'Comment Status',
			'post_date' => 'Post Date',
			'post_modified' => 'Post Modified',
			'post_parent' => 'Post Parent',
			'comment_count' => 'Comment Count',
            'tag' => 'Tag',
            'category' => 'Category',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('post_content',$this->post_content,true);
		$criteria->compare('post_title',$this->post_title,true);
		$criteria->compare('post_name',$this->post_name,true);
		$criteria->compare('post_status',$this->post_status,true);
		$criteria->compare('comment_status',$this->comment_status,true);
		$criteria->compare('post_date',$this->post_date,true);
		$criteria->compare('post_modified',$this->post_modified,true);
		$criteria->compare('post_parent',$this->post_parent,true);
		$criteria->compare('comment_count',$this->comment_count,true);
        $criteria->compare('tag',$this->tag,true);
        $criteria->compare('category',$this->category,true);
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
	 * @return BlogPost the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
