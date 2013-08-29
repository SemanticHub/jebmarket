<?php
/* @var $this PagesController */
/* @var $model Pages */

$this->layout = 'column1';
?>

<h1 class="page-title">Manage Pages</h1>

<?php echo CHtml::link('Create a Page', 'create', array('class' => 'btn btn-success')); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pages-grid',
        'itemsCssClass' => 'table',
        'summaryCssClass' => 'label label-default pull-right',
        'htmlOptions' => array('class' => 'table-responsive'),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'active',
		'title',
		'slug',
		'meta_keywords',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
