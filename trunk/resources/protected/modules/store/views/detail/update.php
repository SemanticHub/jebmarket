<?php
/* @var $this StoreDetailController */
/* @var $model StoreDetail */

$this->breadcrumbs=array(
	'Store Details'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StoreDetail', 'url'=>array('index')),
	array('label'=>'Create StoreDetail', 'url'=>array('create')),
	array('label'=>'View StoreDetail', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StoreDetail', 'url'=>array('admin')),
);
?>

<h1>Update StoreDetail <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>