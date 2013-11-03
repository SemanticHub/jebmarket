<?php
/* @var $this LocationLevelController */
/* @var $model LocationLevel */


$this->menu=array(
	array('label' => Yii::t('phrase', 'Create Location Level'), 'url'=>array('create')),
	array('label' => Yii::t('phrase', 'Update Location Level'), 'url'=>array('update', 'id'=>$model->id)),
	array('label' => Yii::t('phrase', 'Delete Location Level'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label' => Yii::t('phrase', 'Manage'), 'linkOptions' => array('class' => 'list-group-title')),
	array('label' => Yii::t('phrase', 'Location Levels'), 'url'=>array('admin')),
    array('label' => Yii::t('phrase', 'Locations'), 'url' => array('/location/admin')),
);
?>

<h1 class="page-title">View Location Level '<?php echo $model->name; ?>'</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'code',
		'dial_code',
		'next_level_name',
        array(
            'name' => 'parent_id',
            'value' => LocationLevel::model()->findByPk($model->parent_id)->name
        )
	),
)); ?>
