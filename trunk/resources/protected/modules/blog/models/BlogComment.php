<?php

/**
 * This is the model class for table "jebapp_blog_comment".
 *
 * The followings are the available columns in table 'jebapp_blog_comment':
 * @property string $comment_id
 * @property string $comment_author
 * @property string $comment_author_email
 * @property string $comment_author_url
 * @property string $comment_author_IP
 * @property string $comment_content
 * @property string $comment_status
 * @property string $comment_agent
 * @property string $comment_parent
 * @property string $comment_date
 * @property string $comment_date_gmt
 * @property string $user_id
 * @property string $jebapp_blog_post_id
 *
 * The followings are the available model relations:
 * @property BlogPost $jebappBlogPost
 */
class BlogComment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'jebapp_blog_comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment_author, comment_content, comment_author_email, jebapp_blog_post_id', 'required'),
			array('comment_id, comment_status, comment_parent, user_id, jebapp_blog_post_id', 'length', 'max'=>20),
			array('comment_author_email, comment_author_IP', 'length', 'max'=>100),
            array('comment_author_email', 'email'),
			array('comment_author_url', 'length', 'max'=>200),
			array('comment_agent', 'length', 'max'=>255),
			array('comment_date, comment_date_gmt', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('comment_id, comment_author, comment_author_email, comment_author_url, comment_author_IP, comment_content, comment_status, comment_agent, comment_parent, comment_date, comment_date_gmt, user_id, jebapp_blog_post_id', 'safe', 'on'=>'search'),
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
			'jebappBlogPost' => array(self::BELONGS_TO, 'BlogPost', 'jebapp_blog_post_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'comment_id' => 'Comment',
			'comment_author' => 'Comment Author',
			'comment_author_email' => 'Comment Author Email',
			'comment_author_url' => 'Comment Author Url',
			'comment_author_IP' => 'Comment Author Ip',
			'comment_content' => 'Comment Content',
			'comment_status' => 'Comment Status',
			'comment_agent' => 'Comment Agent',
			'comment_parent' => 'Comment Parent',
			'comment_date' => 'Comment Date',
			'comment_date_gmt' => 'Comment Date Gmt',
			'user_id' => 'User',
			'jebapp_blog_post_id' => 'Jebapp Blog Post',
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

		$criteria->compare('comment_id',$this->comment_id,true);
		$criteria->compare('comment_author',$this->comment_author,true);
		$criteria->compare('comment_author_email',$this->comment_author_email,true);
		$criteria->compare('comment_author_url',$this->comment_author_url,true);
		$criteria->compare('comment_author_IP',$this->comment_author_IP,true);
		$criteria->compare('comment_content',$this->comment_content,true);
		$criteria->compare('comment_status',$this->comment_status,true);
		$criteria->compare('comment_agent',$this->comment_agent,true);
		$criteria->compare('comment_parent',$this->comment_parent,true);
		$criteria->compare('comment_date',$this->comment_date,true);
		$criteria->compare('comment_date_gmt',$this->comment_date_gmt,true);
		$criteria->compare('user_id',$this->user_id = Yii::app()->user->id);
		$criteria->compare('jebapp_blog_post_id',$this->jebapp_blog_post_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BlogComment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
