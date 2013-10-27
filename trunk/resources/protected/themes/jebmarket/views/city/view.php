<?php
$this->menu=array(
	array('label'=>Yii::t('phrase','Create City'), 'url'=>array('create')),
	array('label'=>Yii::t('phrase','Update City'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('phrase','Delete City'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('phrase','Manage Cities'), 'url'=>array('admin')),
);
?>

<h1 class="page-title">View City '<?php echo $model->name; ?>'</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'name',
		'code',
		'area',
        array(
            'name' => 'state_id',
            'value' => State::model()->findByPk($model->state_id)->name
        ),
        array(
            'name' => 'country_id',
            'value' => Country::model()->findByPk($model->country_id)->name
        ),
	),
)); ?>
