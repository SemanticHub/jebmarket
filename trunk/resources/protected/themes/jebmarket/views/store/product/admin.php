<?php
$this->menu['storeProducts']['active'] = true;
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#product-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-title">Manage Products</h1>

<ul class="list-inline">
    <li>
        <a class="btn btn-success" href="<?php echo Yii::app()->createUrl('//store/product/create'); ?>">Add New Product</a>
    </li>
</ul>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php /*echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); */?>
<div class="search-form" style="display:none">
<?php /*$this->renderPartial('_search',array(
	'model'=>$model,
)); */?>
</div>-->

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
                    'url' => 'Yii::app()->createUrl("store/product/new", array("id"=>$data->id))',
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
