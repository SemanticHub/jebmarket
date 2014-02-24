<?php
/* @var $this StorePlanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Store Plans',
);

$this->menu=array(
	array('label'=>'Create StorePlan', 'url'=>array('create')),
	array('label'=>'Manage StorePlan', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Store Plans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
