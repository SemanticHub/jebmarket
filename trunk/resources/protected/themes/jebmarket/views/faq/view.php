<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu=array(
	array('label'=>'Create FAQ', 'url'=>array('create')),
	array('label'=>'Update FAQ', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FAQ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FAQ', 'url'=>array('admin')),
);
?>
<h1 class="page-title">View FAQ #<?php echo $model->id; ?></h1>
<?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'faq',
		'answer:html',
		'order',
		'active',
		'tag',
	),
)); ?>