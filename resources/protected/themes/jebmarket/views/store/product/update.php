<?php
$this->storeLinks=array(
    array(
        'label'=>'Add Product',
        'url'=>array('/store/product/new'),
        'icon'=>'<span class="glyphicon glyphicon-plus"></span>'
    ),
);
$this->storeMenu=array(
    array(
        'label'=>'Store Settings',
        'url'=>array('/store/store/settings')
    ),
);
$this->menu['storeProducts']['active'] = true;
?>

<h1 class="page-title">Update Product <?php echo $product->id; ?></h1>

<?php $this->renderPartial('_form', array('product'=>$product, 'productDetail'=>$productDetail)); ?>