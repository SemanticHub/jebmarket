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
        'summaryCssClass' => 'label label-info pull-right',
        'htmlOptions' => array('class' => 'table-responsive'),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'title',
		'slug',
                //'active',
                array(
                    'name' => 'active',
                    'type' => 'html',
                    'value' => '($data->active == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"'
                ),
		'meta_keywords',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
