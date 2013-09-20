<?php
/* @var $this PagesController */
/* @var $model Pages */
$this->menu=array(
	array('label'=>'Manage Pages', 'url'=>array('admin')),
);
?>
<h1 class="page-title">Create Page</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>