<?php
/* @var $this SliderController */
/* @var $model Slider */
$this->pageHeader = "Create a Slider Slide";
$this->menuLinks=array(
    array('label'=>'Manage Slider', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>