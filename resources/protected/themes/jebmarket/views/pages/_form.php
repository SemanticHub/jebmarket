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
        <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'content', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textArea($model, 'content', array('form-groups' => 6, 'cols' => 50, 'class' => 'ckeditor form-control')); ?>
            <?php echo $form->error($model, 'content', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'meta_desc', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textArea($model, 'meta_desc', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'meta_desc', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'meta_keywords', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'meta_keywords', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'meta_keywords', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group rememberMe">
        <span class="col-lg-2"></span>
        <div class="col-lg-10">
            <?php echo $form->checkBox($model, 'active', array('size' => 1, 'maxlength' => 1, 'checked' => 'checked')); ?>
            <?php echo $form->labelEx($model, 'active', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'active', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group buttons">
        <div class="col-lg-12">
            <?php echo CHtml::Button('Save',array('onclick'=>'send();', 'class'=>'btn btn-primary btn-sm')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script>
    CKEDITOR.replace('Pages[content]');
    function send()
    {
        $('#Pages_content').html(CKEDITOR.instances['Pages_content'].getData());
        var data=$("#pages-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo  CHtml::normalizeUrl(array('pages/update','id'=>$model->id)); ?>',
            data:data,
            success:function(data){
                $('.form_page').html(data);
            },
            error: function(data) {
                $('.form_page').html(data);
            },
            dataType:'html'
        });
    }
</script>