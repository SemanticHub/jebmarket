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
class Menu extends CActiveRecord
{

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
        return array(
            array('type, label', 'required'),
            array('parent_id, odr', 'numerical', 'integerOnly' => true),
            array('visibility, tag, type', 'length', 'max' => 45),
            array('url', 'length', 'max' => 255),
            array('active', 'length', 'max' => 1),
            array('id, odr, type, label, url, visibility, active, parent_id, tag', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        return array();
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
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
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
            'criteria' => $criteria
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

    protected static function getMenuItem($item) {
        return str_replace('##USER##', '<span class="glyphicon glyphicon-user"></span> '.Yii::app()->user->name, $item);
    }

    protected static function getVisibility($type) {
        if ($type == 'public') {
            return Yii::app()->user->isGuest;
        } else if ($type == 'private') {
            return !Yii::app()->user->isGuest;
        } else {
            return true;
        }
    }

    protected static function getAdminMenuItemVisibility($item, $url){
        $urlPart = explode('/', $url );
        $actionName = end($urlPart);
        if(Yii::app()->user->checkAccess(Rights::module()->superuserName)){
            return true;
        } else if (Yii::app()->user->checkAccess($item.'.'.$actionName)){
            return true;
        } else if (Yii::app()->user->checkAccess('AdminMenu.'. strtolower(preg_replace("/[^a-zA-Z]+/", "", $item)))) {
            return true;
        } else {
            return false;
        }
    }

    protected static function getURL($type, $urlString) {
        if($type == 'page') {
            $url = Yii::app()->createUrl('page/view', array('view' => $urlString));
        } else if ($type == 'custom') {
            $url = $urlString;
        } else {
            $url = Yii::app()->createUrl($urlString);
        }
        return $url;
    }

    public static function renderMenuItems($menuType) {
        $menuItems = Menu::model()->findAll(array('condition' => 'tag=:tag AND parent_id IS NULL', 'order' => 'odr', 'params' => array(':tag' => $menuType)));
        foreach ($menuItems as $item) {
            $subItems = array();
            $subMenuItems = Menu::model()->findAll(array('condition' => 'tag=:tag AND parent_id=:id', 'order' => 'odr', 'params' => array(':tag' => $menuType, ':id' => $item['id'])));
            if (count($subMenuItems)) {
                foreach ($subMenuItems as $subItem) {
                    $subItems[] = array(
                        'label' => $subItem['label'],
                        'url' => Menu::getURL($subItem['type'], $subItem['url']),
                        'visible' => Menu::getVisibility($subItem['visibility']),
                    );
                }
            }

            $items[] = array(
                'label' => Menu::getMenuItem($item['label']) . (($subItems == NULL) ? '' : '<b class="caret"></b>'),
                'url' => Menu::getURL($item['type'], $item['url']),
                'visible' => Menu::getVisibility($item['visibility']),
                'items' => $subItems,
                'linkOptions' => ($subItems) ? array('class' => 'dropdown-toggle ', 'data-toggle' => 'dropdown', 'data-target' => '#') : array('class' => $item['class']),
            );
        }

        $adminSubMenuItems = array();

        foreach (Yii::app()->params['adminmenu'] as $adminSubMenuItem) {
            array_push($adminSubMenuItems, array(
                'label' => $adminSubMenuItem['label'],
                'url' => $adminSubMenuItem['url'],
                'visible' => Menu::getAdminMenuItemVisibility($adminSubMenuItem['label'], $adminSubMenuItem['url'][0]),
                //'itemOptions' => ($adminSubMenuItem['itemOptions'])
            ));
        }


        $adminMenuItems = array(
            array(
                'label' => Yii::t('phrase', '<span class="glyphicon glyphicon-cog"></span> Admin <b class="caret"></b>'),
                'url' => array('#'),
                'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'data-target' => '#'),
                'visible' => Menu::getAdminMenuItemVisibility('Admin','#'),
                //'items' => Yii::app()->params['adminmenu']
                'items' => $adminSubMenuItems
            ),
        );
        $fullMenuItems = ($menuType == "mainmenu") ? array_merge($items, $adminMenuItems) : $items;
        return $fullMenuItems;
    }

}
