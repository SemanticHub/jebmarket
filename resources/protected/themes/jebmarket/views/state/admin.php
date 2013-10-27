<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/comp/select2/select2.css">
<?php
/* @var $this StateController */
/* @var $model State */

$this->menu=array(
	array('label'=>Yii::t('phrase','Add a State'), 'url'=>array('create')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label' => Yii::t('phrase', 'Countries'), 'url' => array('/country/admin')),
    array('label' => Yii::t('phrase', 'Cities'), 'url' => array('/city/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#state-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 class="page-title">Manage States</h1>
<div class="note bs-callout bs-callout-info">
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
</div>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-primary btn-sm')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'state-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
    'filter' => $model,
	'columns'=>array(
		'name',
        array(
            'name' => 'country_id',
            'value' => 'Country::model()->findByPk($data->country_id)->name',
            'filter'=>CHtml::listData(Country::model()->findAll(), 'id', 'name'),
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{view}{delete}',
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
                'view' => array(
                    'label' => Yii::t('phrase', 'View'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-info btn-xs')
                )
            )
        ),
	),
)); ?>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/select2/select2.min.js"></script>
<script>
    function initSelect2() {
        $("select").select2({width: 'element'});
    }
    $(document).ready(function() { initSelect2()  });
</script>