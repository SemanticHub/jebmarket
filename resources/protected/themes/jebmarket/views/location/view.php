<?php
/* @var $this LocationController */
/* @var $model Location */
$this->menu=array(
    array('label'=>'Create Location', 'url'=>array('create')),
    array('label'=>'Update Location', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Location', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View Location '$model->name'";
$this->menuLinks=array(
    array('label'=>'Manage Location', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
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
