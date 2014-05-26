<?php
$this->storeLinks=array(
    array(
        'id'=>'model-save-action-link',
        'label'=>'Save',
        'url'=>'#',
        'class'=>'',
        'icon'=>'<span class="glyphicon glyphicon-floppy-disk" style="color: cornflowerblue"></span>',
    ),
    array(
        'id'=>'model-cancel-action-link',
        'label'=>'Cancel',
        'url'=>'#',
        'class'=>'',
        'icon'=>'<span class="glyphicon glyphicon-floppy-remove" style="color: red"></span>'
    )
);
/*$this->storeMenu=array(
    array(
        'label'=>'Store Settings',
        'url'=>array('/store/store/settings')
    ),
);*/
$this->menu['storeProducts']['active'] = true;
$this->renderPartial('_form', array( 'model'=>$model ));
?>
<script type="text/javascript">
    $(function(){
        $('#model-save-action-link').click(function(){
            $('#model-form').submit();
            return false;
        });
        $('#model-cancel-action-link').click(function(){
            location.href = 'admin';
            return false;
        })
    });
</script>