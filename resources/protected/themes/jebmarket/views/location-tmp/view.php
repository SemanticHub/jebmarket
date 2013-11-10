<?php

$this->menu=array(
	array('label' => Yii::t('phrase', 'Create Location'), 'url'=>array('create')),
	array('label' => Yii::t('phrase', 'Update Location'), 'url'=>array('update', 'id'=>$model->id)),
	array('label' => Yii::t('phrase', 'Delete Location'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label' => Yii::t('phrase', 'Locations'), 'url' => array('/location/admin')),
    array('label' => Yii::t('phrase', 'Location Levels'), 'url' => array('/locationLevel/admin')),
);
?>

<h1 class="page-title">View Location '<?php echo $model->name; ?>'</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'code',
		'dial_code',
		'area',
        array(
            'name' => 'location_level_id',
            'value' => LocationLevel::model()->findByPk($model->location_level_id)->name
        )
	),
)); ?>
