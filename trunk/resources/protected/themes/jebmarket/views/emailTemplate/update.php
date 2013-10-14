<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */

$this->menu=array(
	array('label'=>'Create Email Template', 'url'=>array('create')),
	array('label'=>'View Email Template', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Email Template', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Update Email Template <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>