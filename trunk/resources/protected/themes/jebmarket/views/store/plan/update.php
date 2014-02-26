<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */


$this->menu=array(
	array('label'=>'Create Store Plan', 'url'=>array('create')),
	array('label'=>'Manage Store Plans', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Update Store Plan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>