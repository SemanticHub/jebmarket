<?php
/* @var $this SliderController */
/* @var $model Slider */
$this->menu=array(
	array('label'=>'Manage Slider', 'url'=>array('admin')),
);
?>
<h1 class="page-title">Create a Slider Slide</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>