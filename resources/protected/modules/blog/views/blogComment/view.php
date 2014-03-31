<?php
$this->menu=array(
    array('label'=>'Create Blog Comment', 'url'=>array('create')),
    array('label'=>'Update Blog Comment', 'url'=>array('update', 'id'=>$model->comment_id)),
    array('label'=>'Delete Blog Comment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->comment_id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View Post";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Blog Comment', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
		'comment_author',
		'comment_author_email',
		'comment_author_url',
		'comment_content',
		'comment_date',
	),
)); ?>
