<?php
$this->storeMenu=array(
    array('label'=>'Manage Stores', 'url'=>array('/store/store/admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
?>

<h1 class="page-title">Create Store Plan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>