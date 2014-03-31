<?php
$this->menu=array(
    array('label'=>'Create Category', 'url'=>array('createcategory')),
    array('label'=>'Update Category', 'url'=>array('updatecategory', 'id'=>$model->term_id)),
    array('label'=>'Delete Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->term_id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View Category";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Category', 'url'=>array('category'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
		'name',
		'slug',
		'description',
		'count',
	),
)); ?>
