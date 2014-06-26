<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/comp/elastislide/css/elastislide.css">
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/comp/select2/select2.css">
<style type="text/css">
    .gallery {
        width: 100%;
        max-width: 450px;
        margin: 0 auto;
        border-radius: 5px;
        position: relative;
        border: 1px solid #e7e7e7;
        padding: 4px;
        background: transparent;
    }

    .elastislide-wrapper {
        position: relative;
        margin: 0 auto;
        min-height: 60px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 5px;
        background: transparent;
        box-shadow: none;
    }

    .elastislide-carousel ul li {
        margin: 0 3px;
    }

    .elastislide-carousel ul li a img {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 5px;
    }

    .elastislide-carousel #media-manager-add {
        width: 100%;
        max-width: 90px;
        max-height: 90px;
        border: 1px solid #ddd;
        text-align: center;
        vertical-align: top;
        height: 90px;
        border-radius: 5px;
        font-weight: 100;
        font-size: 3.5em;
        color: #ccc;
        cursor: pointer;
        box-shadow: 0px 0px 3px #ddd inset;
    }

    .elastislide-carousel #media-manager-add:hover {
        background: #eee;
        border-color: #ccc;
        color: #fff;
        text-shadow: 0px 0px 1px #ccc;
    }

    .elastislide-carousel ul li.current-img a img {
        background: #fff;
        border: 1px solid #ccc;
    }

    .image-preview {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 5px;
        background: #fff;
    }

    .lt-ie8 .elastislide-list {
        display: none;
    }

    @media screen and (max-width: 690px) {
        .codrops-demos {
            float: left;
            clear: both;
        }
    }

    h4 {
        margin-top: 0;
    }
</style>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/elastislide/js/modernizr.custom.17475.js"></script>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'edit-product-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'class' => '',
        'role' => 'form',
        'enctype' => 'multipart/form-data'
    )
));
?>
<h1 class="page-title row">
    <div class="col-md-6">Edit Product</div>
    <div class="col-md-6" style="text-align: right">
        <?php echo $form->radioButtonList($product, 'status', array('0' => 'Draft', '1' => 'Publish'), array('separator' => ' ', 'class' => 'publish_option')); ?>
        <!--        <?php /*echo CHtml::htmlButton(' <span class="glyphicon glyphicon-floppy-disk"></span> Save', array('submit'=> 'new','class' => 'btn btn-sm btn-primary')); */ ?>
        <a id="product-cancel-action-button" style="color: #fff" class="btn btn-sm btn-danger" href="discard" role="button"> <span class="glyphicon glyphicon-floppy-remove"></span> Discard</a>-->
    </div>
</h1>
<div class="row">
    <div class="col-md-12">
        <?php echo $form->errorSummary($product, '', '', array('class' => 'alert alert-danger', 'style' => 'margin-top:0')); ?>
        <?php echo $form->errorSummary($product->productDetail, '', '', array('class' => 'alert alert-danger')); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <h4><?php echo $product->getAttributeLabel('productImages') ?></h4>

            <div class="gallery">
                <ul id="carousel" class="elastislide-list">
                    <?php foreach ($product->productImages as $image) { ?>
                        <li data-preview="<?php echo Yii::app()->getBaseUrl(true) . '/media/' . Yii::app()->user->id . '/' . $image->image_file; ?>"><a href="#<?php echo $image->id ?>"><img style="width: 90px; height: 90px" src="<?php echo Yii::app()->getBaseUrl(true) . '/media/' . Yii::app()->user->id . '/' . $image->image_file; ?>" title="<?php echo $image->title_txt ?>" alt="<?php echo $image->alt_text ?>"/></a>
                        </li>
                    <?php } ?>
                    <li id="media-manager-add">+</li>
                </ul>

                <div class="image-preview" style="text-align: center; overflow: hidden">
                    <img class="img-responsive" id="preview" src=""/>
                </div>
            </div>

            <div class="modal fade" id="media-manager-modal" tabindex="-1" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="padding: 0 15px">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <div class="modal-title">
                                <ul class="nav nav-tabs" id="media-manager-tabs" style="border-bottom: none">
                                    <li class="active"><a id="media-manager-uploader" href="#uploader" data-toggle="tab">Upload</a></li>
                                    <li><a href="#gallery" data-toggle="tab" id="media-manager-gallery">Gallery</a></li>
                                    <li><a href="#social" data-toggle="tab" id="media-manager-social">Cloud</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="tab-content">
                                <div class="tab-pane active fade in" id="uploader">
                                    <div id="dropzone" class="dropzone">
                                        <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade " id="gallery">...</div>
                                <div class="tab-pane fade " id="social">...</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class=""/>

        <div class="form-group">
            <?php echo $form->labelEx($product, 'productCategories', array('class' => 'control-label')); ?>
            <?php echo $form->dropDownList($product, 'productCategories', CHtml::listData(ProductCategory::model()->findAll('store_id=:store_id', array(':store_id' => Store::model()->getUserStoreId())), 'id', 'name'), array('multiple' => 'multiple', 'style' => 'width: 100%'));
            echo $form->error($product, 'productCategories'); ?>
        </div>

        <div class="form-group">
            <?php
            echo $form->labelEx($product, 'manufacture_id', array('class' => 'control-label'));
            echo $form->dropDownList($product, 'manufacture_id', CHtml::listData(ProductManufacture::model()->findAll(), 'id', 'name'), array('style' => 'width:100%'));
            echo $form->error($product, 'manufacture_id');
            ?>
        </div>
    </div>

    <div class="col-md-7">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo $form->labelEx($product, 'type_id'); ?>
                    <?php echo $form->radioButtonList($product, 'type_id', Yii::app()->controller->module->productType, array('template' => '{input} {label}', 'separator' => ' ', 'encode' => false, 'type' => 'text', 'class' => '')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo $form->textField($product, 'title', array('size' => 60, 'maxlength' => 140, 'class' => 'form-control', 'placeholder' => $product->getAttributeLabel('title'))); ?>
                    <?php echo $form->error($product, 'title', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <?php echo $form->textField($product, 'sku', array('size' => 60, 'maxlength' => 140, 'class' => 'form-control', 'placeholder' => $product->getAttributeLabel('sku'))); ?>
                    <?php echo $form->error($product, 'sku', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <div class="form-group">
                    <?php echo $form->textField($product, 'barcode_type', array('size' => 60, 'maxlength' => 140, 'class' => 'form-control', 'placeholder' => $product->getAttributeLabel('barcode_type'))); ?>
                    <?php echo $form->error($product, 'barcode_type', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <?php echo $form->textField($product, 'barcode_value', array('size' => 60, 'maxlength' => 140, 'class' => 'form-control', 'placeholder' => $product->getAttributeLabel('barcode_value'))); ?>
                    <?php echo $form->error($product, 'barcode_value', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <?php echo $form->textField($product, 'price', array('size' => 60, 'maxlength' => 140, 'class' => 'form-control', 'placeholder' => $product->getAttributeLabel('price'))); ?>
                    <?php echo $form->error($product, 'price', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="form-group">
                    <?php echo $form->textField($product, 'quantity', array('size' => 60, 'maxlength' => 140, 'class' => 'form-control', 'placeholder' => $product->getAttributeLabel('quantity'))); ?>
                    <?php echo $form->error($product, 'quantity', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo $form->labelEx($product->productDetail, 'short_details', array('class' => 'control-label')); ?>
                    <?php echo $form->textarea($product, 'short_details', array('class' => 'form-control ')); ?>
                    <?php echo $form->error($product, 'short_details', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo $form->labelEx($product->productDetail, 'description', array('class' => 'control-label')); ?>
                    <?php echo $form->textarea($product->productDetail, 'description', array('class' => 'form-control ')); ?>
                    <?php echo $form->error($product->productDetail, 'description', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <h4>Seo</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo $form->labelEx($product->productDetail, 'page_title', array('class' => 'control-label')); ?>
                    <?php echo $form->textField($product->productDetail, 'page_title', array('class' => 'form-control ')); ?>
                    <?php echo $form->error($product->productDetail, 'page_title', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo $form->labelEx($product->productDetail, 'keyword', array('class' => 'control-label')); ?>
                    <?php echo $form->textField($product->productDetail, 'keyword', array('class' => 'form-control ')); ?>
                    <?php echo $form->error($product->productDetail, 'keyword', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <?php echo $form->labelEx($product->productDetail, 'meta_description', array('class' => 'control-label')); ?>
                    <?php echo $form->textarea($product->productDetail, 'meta_description', array('class' => 'form-control ', 'placeholder' => ProductDetail::model()->getAttributeLabel('meta_description'))); ?>
                    <?php echo $form->error($product->productDetail, 'meta_description', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $this->endWidget(); ?>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/elastislide/js/jquery.elastislide.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/dropzone.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/ckeditor/ckeditor.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/select2/select2.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#Product_productCategories").select2({
            formatNoMatches: function (term) {
                return "<a href=\"#\" onclick=\"return addNewCategory()\" alt=\"" + term + "\" id=\"addNewActionOption\" class=\"btn btn-sm btn-primary\">Add</a>"
            }
        });
    });
    function addNewCategory() {
        $.ajax({
            type: "POST",
            url: "../category/new",
            data: {name: $('#addNewActionOption').attr('alt') },
            dataType: 'json',
            success: function (data, page) {
                $("#Product_productCategories").append($('<option>', {value: data.id, text: data.text}));
                var selectedItems = $("#Product_productCategories").select2("val");
                selectedItems.push(data.id);
                $("#Product_productCategories").select2("val", selectedItems);
                $("#Product_productCategories").select2("close");
            }
        });
    }
    $(function () {
        $("#Product_manufacture_id").select2({
            formatNoMatches: function (term) {
                return "<a href=\"#\" onclick=\"return addNewManufacture()\" alt=\"" + term + "\" id=\"addNewActionManufacture\" class=\"btn btn-sm btn-primary\">Add</a>"
            }
        });
    });
    function addNewManufacture() {
        $.ajax({
            type: "POST",
            url: "../manufacture/new",
            data: {name: $('#addNewActionManufacture').attr('alt') },
            dataType: 'json',
            success: function (data, page) {
                $("#Product_manufacture_id").append($('<option>', {value: data.id, text: data.text}));
                var selectedItems = $("#Product_productCategories").select2("val");
                selectedItems.push(data.id);
                $("#Product_manufacture_id").select2("val", selectedItems);
                $("#Product_manufacture_id").select2("close");
            }
        });
    }

    CKEDITOR.replace('Product_short_details', {
        extraPlugins: 'autogrow,placeholder',
        skin: 'bootstrapck',
        height: 60,
        autoGrow_maxHeight: 400,
        toolbar: [
            [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ],
            [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],
            [ 'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link', 'Unlink' ],
            [ 'FontSize', 'TextColor', 'BGColor' ]
        ]
    });
    CKEDITOR.replace('ProductDetail_description', {
        extraPlugins: 'autogrow,placeholder',
        skin: 'bootstrapck',
        height: 60,
        autoGrow_maxHeight: 400,
        toolbar: [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'NewPage' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
            { name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
            { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
            '/',
            { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
            { name: 'others', items: [ '-' ] }
        ]
    });
</script>
<script type="text/javascript">
    var current = 0,
        $preview = $('#preview'),
        $carouselEl = $('#carousel'),
        $carouselItems = $carouselEl.children(),
        carousel = $carouselEl.elastislide({
            current: current,
            minItems: 4,
            onClick: function (el, pos, evt) {
                changeImage(el, pos);
                evt.preventDefault();
            },
            onReady: function () {
                changeImage($carouselItems.eq(current), current);
            }
        });
    function changeImage(el, pos) {
        $preview.attr('src', el.data('preview'));
        $carouselItems.removeClass('current-img');
        el.addClass('current-img');
        carousel.setCurrent(pos);
    }
    $('#media-manager-add').click(
        function () {
            $('#media-manager-modal').modal({
                backdrop: 'static'
            })
        }
    );
    $('#media-manager-gallery').on('shown.bs.tab', function (e) {
        var repo = <?php echo Yii::app()->homeUrl ?>;
        var user = <?php echo Yii::app()->user->id ?>;
        $.ajax({
            type: "GET",
            url: "<?php echo Yii::app()->homeUrl ?>/media/listJSON",
            data: {},
            dataType: 'json',
            complete: function (data, page) {
                var list = eval(data.responseText);
                console.log(list[0]);
                for(var i = 0; i< list.length; i++){
                    $('<img/>', {
                        id: list[i].id,
                        alt: list[i].alternative_text,
                        title: list[i].description,
                        src: repo+'/media/'+user+'/'+list[i].url
                    }).appendTo('#gallery');
                }
                //$('#gallery').html(data.responseText);
            }
        });
    });
    Dropzone.autoDiscover = false;
    $('div#dropzone').dropzone({
        url: "../productImage/attach",
        paramName: 'Media[url]',
        success: function (file, res) {
            $('<input/>', {
                type: 'hidden',
                name: 'Product[productImages][]',
                value: res,
                rel: 'internal'
            }).appendTo('#dropzone');
            return file.previewElement.classList.add("dz-success");
        }
    });
</script>