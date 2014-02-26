<?php
$this->menu=array(
	array('label'=>'Create Store Plan', 'url'=>array('create')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label'=>'Manage Stores', 'url'=>array('/store/store/admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
?>

<h1 class="page-title">Manage Store Plans</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'store-plan-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
