<?php
$this->storeLinks=array(
    array('label'=>'New Store', 'url'=>array('create'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
$this->storeMenu=array(
    array('label'=>'Manage Stores', 'url'=>array('/store/store/admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
?>
<?php

/*$this->menu=array(
	//array('label'=>'Create Store', 'url'=>array('create')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label'=>'Manage Stores', 'url'=>array('admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);*/

/*Yii::app()->clientScript->registerScript('search', "
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
");*/
?>

<h1 class="page-title">Manage Stores</h1>

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
		//'user_id',
        array(
            'name' => 'user_id',
            'value' => 'User::model()->findByPk($data->user_id)->username'
        ),
		//'plan_id',
        array(
            'name' => 'plan_id',
            'value' => 'StorePlan::model()->findByPk($data->plan_id)->name'
        ),
		'name',
		//'status',
        array(
            'name' => 'status',
            'type' => 'html',
            'value' => '$data->status == 0 ? "Active" : ""'
        ),
		//'visibility',
        array(
            'name' => 'visibility',
            'type'=>'html',
            'value' => '$data->visibility == 0 ? "<span class=\"label label-warning\">Private</span>" : "<span class=\"label label-primary\">Public</span>"'
        ),
		/*
		'timezone',
		'created',
		'updated',
		'expire',
		*/
        array(
            'class' => 'CButtonColumn',
            'template'=>'{update}{view}{delete}',
            'buttons' => array(
                'update' => array(
                    'label'=> Yii::t('phrase','Edit'),
                    'url' => 'Yii::app()->createUrl("//store/store/settings")',
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
        )
	),
));
$this->renderPartial('//layouts/_modal', array('model'=>array()));
?>
