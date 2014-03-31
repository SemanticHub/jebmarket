<?php
/* @var $this LocationController */
/* @var $model Location */
$this->pageHeader = "Create Location";
$this->menuLinks=array(
    array('label'=>'Manage Location', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>