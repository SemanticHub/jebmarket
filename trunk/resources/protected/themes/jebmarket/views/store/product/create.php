<?php
$this->storeLinks=array(
    array('label'=>'Add Product', 'url'=>array('/store/product/create'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
$this->storeMenu=array(
    array('label'=>'Store Settings', 'url'=>array('/store/store/settings')),
    //array('label'=>'Manage Products', 'url'=>array('/store/product/admin')),
);
$this->menu['storeProducts']['active'] = true;
?>

<h1 class="page-title">Product</h1>
<?php $this->renderPartial('_form', array('product'=>$product, 'productDetail'=>$productDetail)); ?>