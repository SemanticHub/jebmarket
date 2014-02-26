<?php
$this->menu=array(
	array('label'=>'Manage Store Plans', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Create Store Plan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>