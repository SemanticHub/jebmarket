<?php
$this->menu=array(
    array('label'=>'Create Blog Comment', 'url'=>array('create')),
    array('label'=>'View Blog Comment', 'url'=>array('view', 'id'=>$model->comment_id)),
);
$this->pageHeader = "Update Blog Comment";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Blog Comment', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>