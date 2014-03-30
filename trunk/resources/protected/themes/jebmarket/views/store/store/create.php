<?php
$this->storeLinks=array(
    array('label'=>'Add Product', 'url'=>array('/store/product/create'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
$this->storeMenu=array(
    array('label'=>'Store Settings', 'url'=>array('/store/store/settings')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);

$this->menu['myStore']['active'] = true;
?>
<h1 class="page-title">Create Store</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>