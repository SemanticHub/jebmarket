<?php
$this->menu = array(
    array('label'=> Yii::t('phrase','Settings'), 'url'=>array('index')),
);
$this->pageHeader = "Manage Settings";
$this->menuLinks=array(
    array('label'=>'Create Settings', 'url'=>array('create'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#settings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
        'model' => $model,
    )); ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'settings-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
    'filter' => $model,
    'columns' => array(
        'name',
        'description',
        'value',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('phrase', 'Edit'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-warning btn-xs')
                ),
                'delete' => array(
                    'label' => Yii::t('phrase', 'Delete'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-danger btn-xs')
                ),
                /*'view' => array(
                    'label' => Yii::t('phrase', 'View'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-info btn-xs')
                )*/
            )
        ),
    ),
)); ?>