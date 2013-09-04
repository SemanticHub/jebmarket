<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->menu=array(
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Update Page', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Page', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pages', 'url'=>array('admin')),
);
?>

<h1 class="page-title">View Page '<?php echo $model->title; ?>'</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table'),
	'data'=>$model,
	'attributes'=>array(
		'title',
		'content:html',
		'slug',
		'meta_title',
		'meta_desc',
		'meta_keywords',
                array(
                    'label' => 'Active',
                    'type'=>'raw',
                    'value' => ($model->active == 1) ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>'
                )
	),
)); ?>
