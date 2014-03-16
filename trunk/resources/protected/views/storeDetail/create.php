<?php
/* @var $this StoreDetailController */
/* @var $model StoreDetail */

$this->breadcrumbs=array(
	'Store Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StoreDetail', 'url'=>array('index')),
	array('label'=>'Manage StoreDetail', 'url'=>array('admin')),
);
?>

<h1>Create StoreDetail</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>