<?php
/* @var $this BlogOptionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blog Options',
);

$this->menu=array(
	array('label'=>'Create BlogOptions', 'url'=>array('create')),
	array('label'=>'Manage BlogOptions', 'url'=>array('admin')),
);
?>

<h1>Blog Options</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
