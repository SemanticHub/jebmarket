<?php
/* @var $this MenuController */
/* @var $model Menu */
$this->menu=array(
	array('label'=>'Create Menu', 'url'=>array('create')),
	array('label'=>'Update Menu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Menu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Menu', 'url'=>array('admin')),
);
?>
<h1 class="page-title">View Menu '<?php echo $model->label; ?>'</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
                'odr',
		'label',
		'url',
                'type',
		'visibility',
                array(
                    'label' => 'Is Active',
                    'type'=>'raw',
                    'value' => ($model->active == 1) ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>'
                ),
		'parent_id',
		'tag',
	),
)); ?>