<?php

/**
 * This is the model class for table "jebapp_menu".
 *
 * The followings are the available columns in table 'jebapp_menu':
 * @property integer $id
 * @property string $label
 * @property string $url
 * @property string $visibility
 * @property string $active
 * @property integer $parent_id
 * @property string $tag
 * @property integer $odr
 * @property string $type
 */
class Menu extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'jebapp_menu';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('parent_id, odr', 'numerical', 'integerOnly' => true),
            array('label, visibility, tag, type', 'length', 'max' => 45),
            array('url', 'length', 'max' => 255),
            array('active', 'length', 'max' => 1),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, odr, type, label, url, visibility, active, parent_id, tag', 'safe', 'on' => 'search'),
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
            'label' => 'Label',
            'url' => 'URL',
            'visibility' => 'Visibility',
            'active' => 'Is Active?',
            'parent_id' => 'Parent Item',
            'tag' => 'Position',
            'odr' => 'Order',
            'type' => 'Type',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('label', $this->label, true);
        $criteria->compare('url', $this->url, true);
        $criteria->compare('visibility', $this->visibility, true);
        $criteria->compare('active', $this->active, true);
        $criteria->compare('parent_id', $this->parent_id);
        $criteria->compare('tag', $this->tag, true);
        $criteria->compare('odr', $this->odr, true);
        $criteria->compare('type', $this->type, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Menu the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public static function renderMenuItems($menuType) {
        $menuItems = Menu::model()->findAll(array('condition' => 'tag=:tag AND parent_id IS NULL', 'order'=>'odr' ,'params' => array(':tag' => $menuType)));
        foreach ($menuItems as $item) {
            $subItems = array();
            $subMenuItems = Menu::model()->findAll(array('condition' => 'tag=:tag AND parent_id=:id', 'params' => array(':tag' => $menuType, ':id' => $item['id'])));
            if (count($subMenuItems)) {                
                foreach ($subMenuItems as $subItem) {
                    $subItems[] = array(
                        'label' => $subItem['label'],
                        'url' => ($subItem['type'] == 'page') ? Yii::app()->createUrl('page/view', array('view' => $subItem['url']) ): Yii::app()->createUrl($subItem['url']),
                        //'visible' => ($subItem['visibility'] == 'public') ? Yii::app()->user->isGuest : !Yii::app()->user->isGuest
                    );
                }
            }
            $items[] = array(
                'label' => $item['label'].(($subItems==NULL)?'':'<b class="caret"></b>'),
                'url' => ($item['type'] == 'page') ? Yii::app()->createUrl('page/view', array('view' => $item['url']) ): Yii::app()->createUrl($item['url']),
                //'visible' => ($item['visibility'] == 'private') ? !Yii::app()->user->isGuest : '',
                'items' => $subItems,
                'linkOptions'=> ($subItems) ? array('class'=>'dropdown-toggle ', 'data-toggle'=>'dropdown', 'data-target'=>'#') : array('class'=>$item['class']),
            );
        }
        $adminMenuItems = array(
            array(
                'label' => Yii::t('phrase', 'Admin <b class="caret"></b>'), 
                'url' => array('#'), 
                'linkOptions'=> array('class'=>'dropdown-toggle', 'data-toggle'=>'dropdown', 'data-target'=>'#'),
                'visible' => !Yii::app()->user->isGuest,
                'items' =>  Yii::app()->params['adminmenu']
                ),
         );
         $fullMenuItems = ($menuType == "mainmenu") ? array_merge($items, $adminMenuItems) : $items;
        return $fullMenuItems;
    }

}
