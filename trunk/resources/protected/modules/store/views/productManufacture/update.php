<?php
/* @var $this ProductManufactureController */
/* @var $model ProductManufacture */

$this->breadcrumbs=array(
	'Product Manufactures'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductManufacture', 'url'=>array('index')),
	array('label'=>'Create ProductManufacture', 'url'=>array('create')),
	array('label'=>'View ProductManufacture', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductManufacture', 'url'=>array('admin')),
);
?>

<h1>Update ProductManufacture <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>