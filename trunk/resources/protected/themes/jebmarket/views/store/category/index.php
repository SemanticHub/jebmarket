<?php
/* @var $this StoreProductCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Store Product Categories',
);

$this->menu=array(
	array('label'=>'Create StoreProductCategory', 'url'=>array('create')),
	array('label'=>'Manage StoreProductCategory', 'url'=>array('admin')),
);
?>

<h1>Store Product Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
