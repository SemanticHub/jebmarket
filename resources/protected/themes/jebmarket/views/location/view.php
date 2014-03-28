<?php
/* @var $this LocationController */
/* @var $model Location */


$this->menu = Yii::app()->params['usermenu'];
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
