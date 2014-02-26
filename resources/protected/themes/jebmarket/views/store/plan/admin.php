<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */

$this->breadcrumbs=array(
	'Store Plans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List StorePlan', 'url'=>array('index')),
	array('label'=>'Create StorePlan', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#store-plan-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-title">Manage Store Plans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'store-plan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'is_default',
		'description',
		'thumb_width_height',
		'image_width_height',
		/*
		'image_max_size',
		'image_per_product',
		'max_disk_space',
		'max_bandwidth',
		'product_per_store',
		'transaction_fee',
		'transaction_period',
		'transaction_fee_type',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
