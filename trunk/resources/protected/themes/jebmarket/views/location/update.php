<?php
/* @var $this LocationController */
/* @var $model Location */
$this->menu=array(
    array('label'=>'Create Location', 'url'=>array('create')),
    array('label'=>'View Location', 'url'=>array('view', 'id'=>$model->id)),
);
$this->pageHeader = "Update Location '$model->name'";
$this->menuLinks=array(
    array('label'=>'Manage Location', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>