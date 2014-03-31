<?php
/**
 * @var $this SettingsController
 * @var $model Settings
 **/

$this->menu=array(
    array('label'=> Yii::t('phrase','Settings'), 'url'=>array('index')),
);
$this->pageHeader = "Define a new Settings";
$this->menuLinks=array(
    array('label'=>'Manage Settings', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>