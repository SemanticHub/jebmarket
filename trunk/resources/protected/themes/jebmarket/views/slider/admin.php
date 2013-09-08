<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->menu=array(
	array('label'=>'Create Slide', 'url'=>array('create')),
);
?>

<h1 class="page-title">Manage Sliders</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
        'id' => 'slider-grid',
        'itemsCssClass' => 'table',
        'summaryCssClass' => 'label label-info pull-right',
        'htmlOptions' => array('class' => 'table-responsive'),
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'headline',
		'image',
		'order',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
