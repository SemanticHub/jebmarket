<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['blog']['active'] = true;
?>
<div class="row">
    <div class="col-md-6">
        <h1 class="page-title">Manage Blog Categorys</h1>
    </div>
    <div class="col-md-6">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('Create Blog Category',array('createcategory'), array('class'=>'btn btn-success')); ?>
                </li>
            </ul>
        </div>
    </div>
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
