<?php
$this->storeLinks=array(
    array('label'=>'New Store Plan', 'url'=>array('create'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
$this->storeMenu=array(
//	array('label'=>'New Store Plan', 'url'=>array('create')),
//    array('label' => '', 'linkOptions' => array('class' => 'divider')),
    array('label'=>'Manage Stores', 'url'=>array('/store/store/admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
?>

<h1 class="page-title">Store Plans</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'store-plan-grid',
    'itemsCssClass' => 'table table-striped table-bordered table-hover',
    'summaryCssClass' => 'label label-default pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
        array(
            'name' => 'is_default',
            'header' => 'Default ?',
            'type' => 'html',
            'value' => '($data->is_default == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"'
        ),
		//'description',
		//'thumb_width_height',
		//'image_width_height',

		//'image_max_size',
		//'image_per_product',
		//'max_disk_space',
		//'max_bandwidth',
		//'product_per_store',
        array(
            'name' =>'transaction_fee',
            'value' => 'number_format($data->transaction_fee, 2)'
        ),
        array(
            'name' => 'transaction_period',
            'type' => 'html',
            'value' => 'Yii::app()->getModule("store")->transactionPeriod[$data->transaction_period]'
        ),
		//'transaction_period',
		//'transaction_fee_type',
        array(
            'name' => 'transaction_fee_type',
            'type' => 'html',
            'value' => 'Yii::app()->getModule("store")->transactionType[$data->transaction_fee_type]'
        ),
        array(
            'class' => 'CButtonColumn',
            'template'=>'{update}{view}{delete}',
            'buttons' => array(
                'update' => array(
                    'label'=> Yii::t('phrase','Edit'),
                    'imageUrl'=> false,
                    'options'=>array('class'=>'btn btn-warning btn-xs')
                ),
                'delete' => array(
                    'label'=> Yii::t('phrase','Delete'),
                    'imageUrl'=> false,
                    'options'=>array('class'=>'btn btn-danger btn-xs')
                ),
                'view' => array(
                    'label'=> Yii::t('phrase','View'),
                    'imageUrl'=> false,
                    'options'=>array('class'=>'btn btn-info btn-xs modal-view-hook', 'data-toggle'=>'modal', 'data-target'=> '.modal')
                   //'options'=>array('class'=>'btn btn-info btn-xs modal-view-hook')
                )
            )
        ),
	),
));
$this->renderPartial('//layouts/_modal', array('model'=>array()));
?>
