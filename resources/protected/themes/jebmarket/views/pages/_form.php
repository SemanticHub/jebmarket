<div class="form_page">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pages-form',
        'enableAjaxValidation'=>false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form',
        ),
    ));
    ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-12', 'style'=>'margin-top: -15px;')); ?>
        <div class="col-lg-12">
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'content', array('class' => 'control-label col-lg-12')); ?>
        <div class="col-lg-12">
            <?php echo $form->textArea($model, 'content', array('form-groups' => 6, 'cols' => 50, 'class' => 'ckeditor form-control')); ?>
            <?php echo $form->error($model, 'content', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'meta_desc', array('class' => 'control-label col-lg-12')); ?>
        <div class="col-lg-12">
            <?php echo $form->textArea($model, 'meta_desc', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'meta_desc', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'meta_keywords', array('class' => 'control-label col-lg-12')); ?>
        <div class="col-lg-12">
            <?php echo $form->textField($model, 'meta_keywords', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'meta_keywords', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group rememberMe">
        <div class="col-lg-12">
            <?php echo $form->checkBox($model, 'active', array('size' => 1, 'maxlength' => 1, 'checked' => 'checked')); ?>
            <?php echo $form->labelEx($model, 'active', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'active', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>

<script>
    CKEDITOR.replace('Pages[content]', {
        extraPlugins : "slideshow,simplebox",
        allowedContent : true,
        filebrowserBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=files',
        filebrowserImageBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=images',
        filebrowserFlashBrowseUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/browse.php?type=flash',
        filebrowserUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=files',
        filebrowserImageUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=images',
        filebrowserFlashUploadUrl: '<?php echo Yii::app()->baseUrl; ?>/kcfinder/upload.php?type=flash',
        // Toolbar configuration generated automatically by the editor based on config.toolbarGroups.
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
            { name: 'others', items: [ '-' ] },
        ],
        // Toolbar groups configuration.
        toolbarGroups: [
            { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
            { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
            { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
            { name: 'insert' },
            '/',
            { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
            { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
            { name: 'links' },
            '/',
            { name: 'styles' },
            { name: 'colors' },
            { name: 'tools' },
            { name: 'others' }
        ]
    });
    $('.dash_second_menu .navbar-right').html('' +
    '<ul class="nav navbar-nav navbar-right">' +
        '<li><a href="<?php echo Yii::app()->baseUrl.'/menu/update?id='.Yii::app()->request->getParam('mid'); ?>" data-toggle="modal" data-target="#update_menu"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>' +
        '<li>' +<?php
        $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
        if(!empty($domainName->name)){
        ?>
        '<a href="<?php echo Yii::app()->baseUrl.'/'.$domainName->domain.'/'.$model->slug; ?>" target="_blank"><span class="glyphicon glyphicon-export"></span> View Page</a>' +
        <?php } ?>'</li>' +
    '</ul>'
    );
    function send()
    {
        $('#Pages_content').html(CKEDITOR.instances['Pages_content'].getData());
        var data=$("#pages-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo  CHtml::normalizeUrl(array('pages/update','id'=>$model->id)); ?>',
            data:data,
            success:function(data){
                $('.pages_update').html(data);
            },
            error: function(data) {
                $('.pages_update').html(data);
            },
            dataType:'html'
        });
    }
</script>