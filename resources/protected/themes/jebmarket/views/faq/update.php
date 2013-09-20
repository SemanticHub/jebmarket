<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu=array(
	array('label'=>'Create FAQ', 'url'=>array('create')),
	array('label'=>'View FAQ', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FAQ', 'url'=>array('admin')),
);
?>
<h1 class="page-title">Update FAQ <?php echo $model->id; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>