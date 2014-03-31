<?php
/* @var $this UserController */
/* @var $model User */
$this->pageHeader = "Create a new User";
$this->menuLinks=array(
    array('label'=>'Manage User', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>