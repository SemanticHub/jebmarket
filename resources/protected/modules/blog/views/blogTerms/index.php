<?php
/* @var $this BlogTermsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blog Terms',
);

$this->menu=array(
	array('label'=>'Create BlogTerms', 'url'=>array('create')),
	array('label'=>'Manage BlogTerms', 'url'=>array('admin')),
);
?>

<h1>Blog Terms</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
