<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
$this->menu=array(
	array('label'=>'Create EmailTemplate', 'url'=>array('create')),
	array('label'=>'Update EmailTemplate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmailTemplate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmailTemplates', 'url'=>array('admin')),
);
?>
<h1 class="page-title">View Email Template '<?php echo $model->name; ?>'</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table'),
	'data'=>$model,
	'attributes'=>array(
		'name',
		'subject',
		'body:html',
	),
)); ?>
