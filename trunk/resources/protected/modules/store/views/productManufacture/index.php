<?php
/* @var $this ProductManufactureController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Manufactures',
);

$this->menu=array(
	array('label'=>'Create ProductManufacture', 'url'=>array('create')),
	array('label'=>'Manage ProductManufacture', 'url'=>array('admin')),
);
?>

<h1>Product Manufactures</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
