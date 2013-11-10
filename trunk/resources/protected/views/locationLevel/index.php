<?php
/* @var $this LocationLevelController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Location Levels',
);

$this->menu=array(
	array('label'=>'Create LocationLevel', 'url'=>array('create')),
	array('label'=>'Manage LocationLevel', 'url'=>array('admin')),
);
?>

<h1>Location Levels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
