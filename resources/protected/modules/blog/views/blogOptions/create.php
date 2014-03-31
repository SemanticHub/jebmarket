<?php
$this->pageHeader = "Create Blog Option";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Blog Option', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>