<?php
/**
 * @var $this SettingsController
 * @var $model Settings
 **/

$this->menu=array(
	array('label'=> Yii::t('phrase','Settings'), 'url'=>array('index')),
	array('label'=> Yii::t('phrase','Create Settings'), 'url'=>array('create')),
);
$this->pageHeader = "Update Settings '$model->name'";
$this->menuLinks=array(
    array('label'=>'Manage Settings', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>