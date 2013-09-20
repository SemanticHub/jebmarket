<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
$this->menu=array(
	array('label'=>'Manage Email Templates', 'url'=>array('admin')),
);
?>
<h1 class="page-title">Create Email Template</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>