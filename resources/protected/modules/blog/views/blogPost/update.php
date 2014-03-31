<?php
$this->menu=array(
    array('label'=>'Create Post', 'url'=>array('create')),
    array('label'=>'View Post', 'url'=>array('view', 'id'=>$model->id)),
);
$this->pageHeader = "Update Post '$model->post_title'";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Post', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>