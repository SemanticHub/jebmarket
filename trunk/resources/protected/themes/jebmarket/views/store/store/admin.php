<?php
/* @var $this StoreController */
/* @var $model Store */


$this->menu=array(
	//array('label'=>'Create Store', 'url'=>array('create')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label'=>'Manage Stores', 'url'=>array('admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#store-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-title">Manage Stores</h1>

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
	'id'=>'store-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'user_id',
		'plan_id',
		'name',
		'status',
		'visibility',
		/*
		'timezone',
		'created',
		'updated',
		'expire',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
