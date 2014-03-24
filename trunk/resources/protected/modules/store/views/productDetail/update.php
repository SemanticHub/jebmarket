<?php
/* @var $this ProductDetailController */
/* @var $model ProductDetail */

$this->breadcrumbs=array(
	'Product Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductDetail', 'url'=>array('index')),
	array('label'=>'Create ProductDetail', 'url'=>array('create')),
	array('label'=>'View ProductDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductDetail', 'url'=>array('admin')),
);
?>

<h1>Update ProductDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>