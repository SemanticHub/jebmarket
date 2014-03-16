<?php
/*$this->menu=array(
    array('label'=>'View Stores', 'url'=>array('view')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label'=>'Manage Stores', 'url'=>array('admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
*/
$this->menu['myStore']['active'] = true;
?>



<h1 class="page-title">Create Store</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>