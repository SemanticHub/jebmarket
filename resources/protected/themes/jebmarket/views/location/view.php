<?php
/* @var $this LocationController */
/* @var $model Location */


$this->menu=array(
	array('label' => Yii::t('phrase', 'Create Location'), 'url'=>array('create')),
	array('label' => Yii::t('phrase', 'Update Location'), 'url'=>array('update', 'id'=>$model->id)),
	array('label' => Yii::t('phrase', 'Delete Location'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label' => Yii::t('phrase', 'Manage'), 'linkOptions' => array('class' => 'list-group-title')),
	array('label' => Yii::t('phrase', 'Locations'), 'url'=>array('admin')),
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
		'timezone',
		'next_level_name',
        array(
            'name' => 'parent_id',
            'value' => Location::model()->findByPk($model->parent_id)->name
        ),
        'lang'
	),
)); ?>
