<?php
/* @var $this UserTemplateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'User Templates',
);

$this->menu=array(
	array('label'=>'Create UserTemplate', 'url'=>array('create')),
	array('label'=>'Manage UserTemplate', 'url'=>array('admin')),
);
?>

<h1>User Templates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
