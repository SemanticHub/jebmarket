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
$this->renderPartial('_new_product_form', array( 'product'=>$product ));

?>