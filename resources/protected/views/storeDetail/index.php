<?php
/* @var $this StoreDetailController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Store Details',
);

$this->menu=array(
	array('label'=>'Create StoreDetail', 'url'=>array('create')),
	array('label'=>'Manage StoreDetail', 'url'=>array('admin')),
);
?>

<h1>Store Details</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
