<?php
/* @var $this ProductDetailController */
/* @var $model ProductDetail */

$this->breadcrumbs=array(
	'Product Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductDetail', 'url'=>array('index')),
	array('label'=>'Manage ProductDetail', 'url'=>array('admin')),
);
?>

<h1>Create ProductDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>