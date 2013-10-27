<?php
$this->menu=array(
	array('label'=>Yii::t('phrase','Add a Country'), 'url'=>array('create')),
	array('label'=>Yii::t('phrase','Update Country'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('phrase','Delete Country'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('phrase','Manage Countries'), 'url'=>array('admin')),
);
?>

<h1 class="page-title">View Country '<?php echo $model->name; ?>'</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'code',
		'name',
		'ccode',
	),
)); ?>
