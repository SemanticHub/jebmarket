<?php
/* @var $this ProductManufactureController */
/* @var $model ProductManufacture */

$this->breadcrumbs=array(
	'Product Manufactures'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductManufacture', 'url'=>array('index')),
	array('label'=>'Manage ProductManufacture', 'url'=>array('admin')),
);
?>

<h1>Create ProductManufacture</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>