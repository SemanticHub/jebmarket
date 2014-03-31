<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
$this->menu=array(
    array('label'=>'Create Email Template', 'url'=>array('create')),
    array('label'=>'View Email Template', 'url'=>array('view', 'id'=>$model->id)),
);
$this->pageHeader = "Update Email Template $model->name";
$this->menuLinks=array(
    array('label'=>'Manage Email Template', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>