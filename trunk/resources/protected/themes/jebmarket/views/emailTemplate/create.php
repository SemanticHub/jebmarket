<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
$this->pageHeader = "Create Email Template";
$this->menuLinks=array(
    array('label'=>'Manage Email Template', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>