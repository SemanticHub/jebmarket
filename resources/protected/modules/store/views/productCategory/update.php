<?php
/* @var $this StoreProductCategoryController */
/* @var $model StoreProductCategory */

$this->breadcrumbs=array(
	'Store Product Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StoreProductCategory', 'url'=>array('index')),
	array('label'=>'Create StoreProductCategory', 'url'=>array('create')),
	array('label'=>'View StoreProductCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StoreProductCategory', 'url'=>array('admin')),
);
?>

<h1>Update StoreProductCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>