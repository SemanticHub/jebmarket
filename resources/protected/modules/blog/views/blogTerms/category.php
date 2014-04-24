<div class="3rd_page_menu">
    <a href="<?php echo Yii::app()->baseUrl.'/blog/blogTerms/createcategory'; ?>" class="btn btn-default blog_ajax_link"><span class="glyphicon glyphicon-plus"></span> Add Category</a>
</div>
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
                    'options' => array('class' => 'btn btn-warning btn-xs blog_ajax_link')
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
                    'options' => array('class' => 'btn btn-info btn-xs blog_ajax_link')
                )
            )
        ),
	),
)); ?>
