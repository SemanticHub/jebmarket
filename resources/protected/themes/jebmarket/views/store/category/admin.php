<?php
$this->storeLinks=array(
    array('label'=>'Add Category', 'url'=>array('/store/category/create'), 'icon'=>'<span class="glyphicon glyphicon-plus icon-store-product-add"></span>'),
    array('label'=>'Products', 'url'=>array('/store/product'), 'icon'=>'<span class="glyphicon glyphicon-barcode icon-store-product-category"></span>'),
    array('label'=>'Manufactures', 'url'=>array('/store/manufacture'), 'icon'=>'<span class="glyphicon glyphicon-certificate icon-store-product-manufacture"></span>'),
);
/*$this->storeMenu=array(
    array('label'=>'Store Settings', 'url'=>array('/store/store/settings')),
    //array('label'=>'Manage Products', 'url'=>array('/store/product/admin')),
);*/
$this->menu['storeProducts']['active'] = true;
?>
<h1 class="page-title">Manage Product Categories</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'store-product-category-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right top-21',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
    'filter'=>$model,
	'columns'=>array(
		//'id',
		//'parent_id',
		//'is_root',
		'name',
		'description',
		//'meta_description',
		/*
		'meta_keyword',
		'image',
		'shop_default',
		'status',
		'visibility',
		*/
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('phrase', 'Edit'),
                    'imageUrl' => false,
                    //'url' => 'Yii::app()->createUrl("store/category/update", array("id"=>$data->id))',
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
