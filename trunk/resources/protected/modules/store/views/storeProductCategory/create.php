<?php
/* @var $this StoreProductCategoryController */
/* @var $model StoreProductCategory */

$this->breadcrumbs=array(
	'Store Product Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StoreProductCategory', 'url'=>array('index')),
	array('label'=>'Manage StoreProductCategory', 'url'=>array('admin')),
);
?>

<h1>Create StoreProductCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>