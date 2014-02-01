<?php
/* @var $this BlogCommentController */
/* @var $model BlogComment */

$this->breadcrumbs=array(
	'Blog Comments'=>array('index'),
	$model->comment_id,
);

$this->menu=array(
	array('label'=>'List BlogComment', 'url'=>array('index')),
	array('label'=>'Create BlogComment', 'url'=>array('create')),
	array('label'=>'Update BlogComment', 'url'=>array('update', 'id'=>$model->comment_id)),
	array('label'=>'Delete BlogComment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->comment_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BlogComment', 'url'=>array('admin')),
);
?>

<h1>View BlogComment #<?php echo $model->comment_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'comment_id',
		'comment_author',
		'comment_author_email',
		'comment_author_url',
		'comment_author_IP',
		'comment_content',
		'comment_status',
		'comment_agent',
		'comment_parent',
		'comment_date',
		'comment_date_gmt',
		'user_id',
		'jebapp_blog_post_id',
	),
)); ?>
