<?php
$this->menu=array(
    array('label'=>'Create Category', 'url'=>array('createcategory')),
);
$this->pageHeader = "Update Category";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Category', 'url'=>array('category'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_formcategory', array('model'=>$model)); ?>