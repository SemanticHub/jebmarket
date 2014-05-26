<?php
$this->storeLinks=array(
    array('label'=>'Add Product', 'url'=>array('/store/product/new'), 'icon'=>'<span class="glyphicon glyphicon-plus icon-store-product-add"></span>'),
    array('label'=>'Categories', 'url'=> '#', 'icon'=>'<span class="glyphicon glyphicon-list-alt icon-store-product-category"></span>'),
    array('label'=>'Manufactures', 'url'=> '#', 'icon'=>'<span class="glyphicon glyphicon-certificate icon-store-product-manufacture"></span>'),
);
/*$this->storeMenu=array(
    array('label'=>'Store Settings', 'url'=>array('/store/store/settings')),
    //array('label'=>'Manage Products', 'url'=>array('/store/product/admin')),
);*/
$this->menu['storeProducts']['active'] = true;
?>

<h1 class="page-title">Manage Products</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'product-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right top-21',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		//'store_id',
        'sku',
		//'status',
        array(
            'name' => 'status',
            'type' => 'html',
            'value' => '($data->status == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"'
        ),
		'title',
		//'barcode_type',

		//'barcode_value',
		//'short_details',
		//'added',
		//'modified',
		//'published',
		'price',
		'quantity',
		//'default_image',

		/*array(
			'class'=>'CButtonColumn',
		),*/
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('phrase', 'Edit'),
                    'imageUrl' => false,
                    'url' => 'Yii::app()->createUrl("store/product/edit", array("id"=>$data->id))',
                    'options' => array('class' => 'btn btn-warning btn-xs')
                ),
                'delete' => array(
                    'label' => Yii::t('phrase', 'Delete'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-danger btn-xs')
                ),
                'view' => array(
                    'label' => Yii::t('phrase', 'View'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-info btn-xs')
                )
            )
        ),
	),
)); ?>
