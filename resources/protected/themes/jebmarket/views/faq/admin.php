<?php
/* @var $this FaqController */
/* @var $model Faq */

$this->layout = 'column1';

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#faq-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1 class="page-title">Manage FAQs</h1>

<div class="note bs-callout bs-callout-info">
    <p>
        You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
        or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
    </p>
</div>    

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button btn btn-primary')); ?> &nbsp;
<?php echo CHtml::link('Create FAQ', 'create', array('class' => 'btn btn-success')); ?>

<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'faq-grid',
    'itemsCssClass' => 'table',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'tag',
        'faq',
        'order',
        'active',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
