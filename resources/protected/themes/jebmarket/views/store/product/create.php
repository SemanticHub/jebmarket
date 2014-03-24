<?php
$this->menu['storeProducts']['active'] = true;
?>

<h1 class="page-title">Product</h1>
<?php $this->renderPartial('_form', array('product'=>$product, 'productDetail'=>$productDetail)); ?>