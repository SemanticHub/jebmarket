<?php

class PagesController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            //'accessControl', // perform access control for CRUD operations
            //'postOnly + delete', // we only allow deletion via POST request
            'rights'
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    public function actionPageins() {
        $this->layout = false;
        $this->render('pageins');
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $this->layout = false;
        $user_id = Yii::app()->user->id;
        $type = Yii::app()->request->getParam('type');
        $tag = Yii::app()->request->getParam('tag');
        $mName = Yii::app()->request->getParam('mName');
        $menu = new Menu;
        $model = new Pages;
        $modelData = Pages::model()->findAll("jebapp_user_id=$user_id");
        $stack = array('0');
        foreach($modelData as $slug){
            $lastNum = substr($slug->slug, -1);
            $first_ch = substr($slug->slug, 0, -1);
            if(is_numeric($lastNum) && $first_ch='new-page-'){
                array_push($stack, $lastNum);
            }
        }
        $page_num = max($stack) + 1;
        if($type == 'page'){
            if (!isset($_GET['ajax'])) {
                $model->slug = 'new-page-'.$page_num;
                $model->title = 'New Page '.$page_num;
                if ($model->save()){
                    $menu->label = $model->title;
                    $menu->type = $type;
                    $menu->tag = $tag;
                    $menu->url = $model->slug;
                    if ($menu->save())
                        echo "hide";
                }
            }
        }elseif($type == 'blog'){
            if (!isset($_GET['ajax'])) {
                $builder=Yii::app()->db->schema->commandBuilder;
                $createmenu=$builder->createMultipleInsertCommand('jebapp_menu', array(
                    array('label' => "Blog-$page_num", 'url' => "blog-$page_num", 'route' => 'blog', 'visibility' => 'auto', 'active' => '1', 'tag' => $tag, 'odr' => '3', 'type' => 'module', 'jebapp_user_id' => Yii::app()->user->id),
                ));
                $createmenu->execute();
                    echo "hide";
            }
        }elseif($type == 'custom'){
            if (!isset($_GET['ajax'])) {
                $builder=Yii::app()->db->schema->commandBuilder;
                $createmenu=$builder->createMultipleInsertCommand('jebapp_menu', array(
                    array('label' => "Link-Page-$page_num", 'url' => "#", 'visibility' => 'auto', 'active' => '1', 'tag' => $tag, 'type' => 'custom', 'jebapp_user_id' => Yii::app()->user->id),
                ));
                $createmenu->execute();
                    echo "hide";
            }
        }elseif($type == 'social'){
            if (!isset($_GET['ajax'])) {
                $builder=Yii::app()->db->schema->commandBuilder;
                $createmenu=$builder->createMultipleInsertCommand('jebapp_menu', array(
                    array('label' => 'Facebook', 'url' => '#', 'visibility' => 'auto', 'active' => '1', 'tag' => $tag, 'odr' => '1', 'type' => 'social', 'class' => 'facebook', 'jebapp_user_id' => Yii::app()->user->id),
                    array('label' => 'Twitter', 'url' => '#', 'visibility' => 'auto', 'active' => '1', 'tag' => $tag, 'odr' => '2', 'type' => 'social', 'class' => 'twitter', 'jebapp_user_id' => Yii::app()->user->id),
                    array('label' => 'Google Plus', 'url' => '#', 'visibility' => 'auto', 'active' => '1', 'tag' => $tag, 'odr' => '3', 'type' => 'social', 'class' => 'google', 'jebapp_user_id' => Yii::app()->user->id),
                ));
                $createmenu->execute();
                    echo "hide";
            }
        }elseif($type == 'login'){
            if (!isset($_GET['ajax'])) {
                $builder=Yii::app()->db->schema->commandBuilder;
                $createmenu=$builder->createMultipleInsertCommand('jebapp_menu', array(
                    array('label' => '<span class="glyphicon glyphicon-user"></span> Login / Register', 'url' => 'site/login', 'visibility' => 'public', 'active' => '1', 'tag' => $tag, 'odr' => '4', 'type' => 'module', 'jebapp_user_id' => Yii::app()->user->id),
                    array('label' => '<span class="glyphicon glyphicon-log-out"></span> Logout', 'url' => 'site/logout', 'visibility' => 'private', 'active' => '1', 'tag' => $tag, 'odr' => '5', 'type' => 'module', 'jebapp_user_id' => Yii::app()->user->id),
                    array('label' => '<span class="glyphicon glyphicon-edit"></span> My Account', 'url' => 'user/profile', 'visibility' => 'private', 'active' => '1', 'tag' => $tag, 'odr' => '6', 'type' => 'module', 'jebapp_user_id' => Yii::app()->user->id),
                ));
                $createmenu->execute();
                    echo "hide";
            }
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $this->layout = false;
        Yii::app()->clientScript->scriptMap['*.js'] = false;
        $model = $this->loadModel($id);
        if (isset($_POST['Pages']) || isset($_POST['UserTemplate'])) {
            $model->attributes = $_POST['Pages'];
            $model->save();
            $theme = Template::model()->findByAttributes(array('name'=>Yii::app()->theme->name));
            $templates = UserTemplate::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id, 'jebapp_template_id' => $theme->id));
            UserTemplate::model()->updateByPk($templates->id, array('custom_css'=>$_POST['UserTemplate']['custom_css']));
        }
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Pages');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $user_id = Yii::app()->user->id;
        $topMenu = Menu::model()->findAll(array('condition' => 'tag="topmenu" AND jebapp_user_id=:user_id AND url NOT IN ("user/profile", "site/logout")', 'order' => 'odr', 'params' => array(':user_id' => $user_id)));
        $topMenuData=new CArrayDataProvider($topMenu, array(
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $menuItems = Menu::model()->findAll(array('condition' => 'tag="mainmenu" AND jebapp_user_id=:user_id AND url NOT IN ("user/profile", "site/logout")', 'order' => 'odr', 'params' => array(':user_id' => $user_id)));
        $mainMenuData=new CArrayDataProvider($menuItems, array(
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $footerMenu = Menu::model()->findAll(array('condition' => 'tag="footermenu" AND jebapp_user_id=:user_id AND url NOT IN ("user/profile", "site/logout")', 'order' => 'odr', 'params' => array(':user_id' => $user_id)));
        $footerMenuData=new CArrayDataProvider($footerMenu, array(
            'pagination'=>array(
                'pageSize'=>200,
            ),
        ));
        $this->render('admin', array(
            'topMenuData' => $topMenuData,
            'mainMenuData' => $mainMenuData,
            'footerMenuData' => $footerMenuData,
        ));
    }

    protected function gridDataColumn($data, $d = null)
    {
        $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
        if($d == 'home'){
            if(!empty($domainName->domain) && $domainName->domain != '/'){
                return '/'.$domainName->domain.'/?edit=n';
            }else{
                return '/?edit=n';
            }
        }elseif($d == 'module'){
            if(!empty($domainName->domain) && $domainName->domain != '/'){
                return $domainName->domain.'/'.$data.'?edit=n';
            }else{
                return '/'.$data.'?edit=n';
            }
        }else{
            if(!empty($domainName->domain) && $domainName->domain != '/'){
                return $domainName->domain.'/'.$data.'?edit=n';
            }else{
                return 'page/view?view='.$data.'&edit=n';
            }
        }
    }

    public function actionCustomlink($id) {
        $this->layout = false;
        Yii::app()->clientScript->scriptMap['*.js'] = false;
        $model = $this->loadCustomlink($id);
        if (isset($_POST['Menu'])) {
            $model->attributes = $_POST['Menu'];
            $model->tag = Yii::app()->request->getParam('tag');
            $model->type = 'custom';
            $model->active = '1';
            if ($model->save())
                Yii::app()->user->setFlash('customMenu', 'Menu Saved Successfully.');
        }
        $this->render('customlink', array(
            'model' => $model
        ));
    }

    public function loadCustomlink($id) {
        $model = Menu::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Pages the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Pages::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Pages $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'pages-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
