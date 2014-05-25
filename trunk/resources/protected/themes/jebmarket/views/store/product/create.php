<?php
$this->storeLinks=array(
    array(
        'id'=>'product-save-action-link',
        'label'=>'Save',
        'url'=> '#',
        'class'=>'',
        'icon'=>'<span class="glyphicon glyphicon-floppy-disk" style="color: cornflowerblue"></span>',
    ),
    array(
        'id'=>'product-cancel-action-link',
        'label'=>'Cancel',
        'url'=> '#',
        'class'=>'',
        'icon'=>'<span class="glyphicon glyphicon-floppy-remove" style="color: red"></span>'
    )
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
<script type="text/javascript">
    $(function(){
        $('#product-save-action-link').click(function(){
            $('#create-product-form').submit();
        });
        $('#product-cancel-action-link').click(function(){
            location.href = 'discard';
        })
    });
</script>