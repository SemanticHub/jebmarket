<?php
/* @var $this UserController */
/* @var $model User */
$this->menu = array(
    array('label' => 'Create User', 'url' => array('create')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1 class="page-title">Manage Users</h1>
<div class="note bs-callout bs-callout-info">
    <p>
        You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
        or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
    </p>
</div>
<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn btn-primary')); ?> &nbsp;
<div class="search-form" style="display:none">
    <?php $this->renderPartial('_search', array(
        'model' => $model,
    )); ?>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
    'filter' => $model,
    'columns' => array(
        array(
            'name'=>'id',
            'htmlOptions' => array('style' => 'width:30px; text-align:right')
        ),
        array(
            'name' => 'activationstatus',
            'type' => 'html',
            'value' => '($data->activationstatus == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"',
            'htmlOptions' => array('style' => 'width:30px; text-align:center')
        ),
        'username',
        'email',
        'joined',
        'last_login',
        array(
            'class' => 'CButtonColumn',
            'template' => '{view}{delete}',
            'buttons' => array(
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