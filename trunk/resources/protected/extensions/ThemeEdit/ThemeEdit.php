<?php

class ThemeEdit extends CWidget {

    public function run()
    {
        $pageID = Pages::model()->pageID();
        $editID = Yii::app()->request->getParam('edit');
        if(!empty($pageID) && ($editID == 'y') && !Yii::app()->request->isAjaxRequest){
            $user_id = Yii::app()->user->id;
            $menuDataItems = Menu::model()->findAll(array('condition' => 'type="page" AND jebapp_user_id=:user_id', 'group' => 'url', 'order' => 'odr', 'params' => array(':user_id' => $user_id)));
            $menuData=new CArrayDataProvider($menuDataItems, array(
                'pagination'=>array(
                    'pageSize'=>200,
                ),
            ));
            $contact = new ContactForm;
            $this->render('index',array(
                'pageID' => $pageID,
                'editID' => $editID,
                'menuData' => $menuData,
                'contact' => $contact
            ));
        }
    }

}