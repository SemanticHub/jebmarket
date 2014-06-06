<?php

class ThemeEdit extends CWidget {

    public function run()
    {
        $pageID = Pages::model()->pageID();
        $editID = Yii::app()->request->getParam('edit');
        if(!empty($pageID) && empty($editID)){
            $this->render('index',array(
                'pageID' => $pageID,
                'editID' => $editID
            ));
        }
    }

}