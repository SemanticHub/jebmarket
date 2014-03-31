<?php
$this->menu=array(
    array('label'=>'Create Tag', 'url'=>array('createtag')),
);
$this->pageHeader = "Update Tag";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Tag', 'url'=>array('tag'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_formtag', array('model'=>$model)); ?>