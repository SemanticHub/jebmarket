<?php
$this->pageHeader = "Manage Blog Category";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Create Blog Category', 'url'=>array('createcategory'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
?>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	'id'=>'blog-terms-grid',
	'dataProvider'=>$model->searchcategory(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'slug',
		'description',
		'count',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{view}{delete}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('phrase', 'Edit'),
                    'imageUrl' => false,
                    'url'=>"CHtml::normalizeUrl(array('updatecategory', 'id'=>\$data->term_id))",
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
                    'url'=>"CHtml::normalizeUrl(array('viewcategory', 'id'=>\$data->term_id))",
                    'options' => array('class' => 'btn btn-info btn-xs')
                )
            )
        ),
	),
)); ?>
