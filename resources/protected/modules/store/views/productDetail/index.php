<?php
/* @var $this ProductDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Details',
);

$this->menu=array(
	array('label'=>'Create ProductDetail', 'url'=>array('create')),
	array('label'=>'Manage ProductDetail', 'url'=>array('admin')),
);
?>

<h1>Product Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
