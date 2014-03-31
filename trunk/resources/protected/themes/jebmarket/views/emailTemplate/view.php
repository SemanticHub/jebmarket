<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
$this->menu=array(
    array('label'=>'Create Email Template', 'url'=>array('create')),
    array('label'=>'Update Email Template', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Email Template', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View Email Template '$model->name'";
$this->menuLinks=array(
    array('label'=>'Manage Email Template', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'name',
		'subject',
		'body:html',
	),
)); ?>
