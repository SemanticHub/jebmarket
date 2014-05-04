<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'slider-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'class' => '',
        'role' => 'form',
        'enctype' => 'multipart/form-data'
    )
));
?>
<h1 class="page-title row">
    <div class="col-md-6">
        New Product
    </div>
    <div class="col-md-6" style="text-align: right">
        <?php echo $form->radioButtonList($product,'status', array('0'=> 'Draft', '1'=> 'Publish') ,array('separator'=>' ', 'class'=>'publish_option')); ?>
        <?php echo CHtml::htmlButton(' <span class="glyphicon glyphicon-floppy-disk"></span> Save', array('submit'=> 'new','class' => 'btn btn-sm btn-primary')); ?>
        <a style="color: #fff" class="btn btn-sm btn-danger" href="#" role="button"> <span class="glyphicon glyphicon-floppy-remove"></span> Discard</a>
    </div>
</h1>

<div class="row">

    <div class="col-xs-5" style="text-align: center">
        <div id="dropzone" class="drop-zone">
             <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
        </div>
    </div>

    <div class="col-xs-7">
        <div class="row">
            <div class="col-sx-12">
                <ol class="breadcrumb" style="margin-bottom: 0">
                    <li><a href="#">Un-categorised</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <?php echo $form->textField($product,'title', array('size'=>60,'maxlength'=>140, 'class'=>'form-control', 'placeholder'=>$product->getAttributeLabel('title'))); ?>
                    <?php echo $form->error($product,'title'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <div class="form-group">
                    <?php echo $form->textField($product,'sku', array('size'=>60,'maxlength'=>140, 'class'=>'form-control', 'placeholder'=>$product->getAttributeLabel('sku'))); ?>
                    <?php echo $form->error($product,'sku'); ?>
                </div>
            </div>
            <div class="col-xs-4 col-xs-offset-1">
                <div class="form-group">
                    <?php echo $form->textField($product,'barcode_type', array('size'=>60,'maxlength'=>140, 'class'=>'form-control', 'placeholder'=>$product->getAttributeLabel('barcode_type'))); ?>
                    <?php echo $form->error($product,'barcode_type'); ?>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <?php echo $form->textField($product,'barcode_value', array('size'=>60,'maxlength'=>140, 'class'=>'form-control', 'placeholder'=>$product->getAttributeLabel('barcode_value'))); ?>
                    <?php echo $form->error($product,'barcode_value'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-3">
                <div class="form-group">
                    <?php echo $form->textField($product,'price', array('size'=>60,'maxlength'=>140, 'class'=>'form-control', 'placeholder'=>$product->getAttributeLabel('price'))); ?>
                    <?php echo $form->error($product,'price'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <?php echo $form->textarea($product,'short_details', array('size'=>60,'maxlength'=>140, 'class'=>'form-control', 'placeholder'=>$product->getAttributeLabel('short_details'))); ?>
                    <?php echo $form->error($product,'short_details'); ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->endWidget(); ?>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/dropzone.js"></script>
<script type="text/javascript">
    var myDropzone = new Dropzone("div#dropzone", { url: "/file/post"});
</script>