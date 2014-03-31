<?php
$this->menu=array(
    array('label'=>'Create Post', 'url'=>array('create')),
    array('label'=>'Update Post', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Post', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View Post '$model->post_title'";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Post', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
        'post_title',
		'post_name',
		'post_status',
		'comment_status',
		'post_date',
		'post_modified',
		'comment_count',
        array(
            'name'=>'post_content',
            'type'=>'html',
        ),
	),
)); ?>
