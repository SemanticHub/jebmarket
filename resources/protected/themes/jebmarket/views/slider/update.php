<?php
/* @var $this SliderController */
/* @var $model Slider */
$this->menu=array(
    array('label'=>'Create Slider', 'url'=>array('create')),
    array('label'=>'View Slider', 'url'=>array('view', 'id'=>$model->id)),
);
$this->pageHeader = "Update Slider '$model->headline'";
$this->menuLinks=array(
    array('label'=>'Manage Slider', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>