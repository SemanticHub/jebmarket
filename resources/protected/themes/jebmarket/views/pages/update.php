<?php
/* @var $this PagesController */
/* @var $model Pages */
$this->menu=array(
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'View Page', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Pages', 'url'=>array('admin')),
);
?>
<h1 class="page-title">Update Pages '<?php echo $model->title; ?>'</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>