<div class="form_page">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pages-form',
        'enableAjaxValidation'=>true,
        'action'=>$this->createUrl('pages/update'),
        'enableClientValidation'=>true,
        'focus' => 'input[type="text"]:first',
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
            <?php echo CHtml::ajaxSubmitButton('Save',CHtml::normalizeUrl(array('pages/update','id'=>$model->id)),
                array(
                    'dataType'=>'json',
                    'type'=>'post',
                    'success'=>'function(data) {
                         $("#AjaxLoader").hide();
                        if(data.status=="success"){
                         $("#formResult").html("form submitted successfully.");
                         $("#user-form")[0].reset();
                        }
                         else{
                        $.each(data, function(key, val) {
                        $("#user-form #"+key+"_em_").text(val);
                        $("#user-form #"+key+"_em_").show();
                        });
                        }
                    }',
                    'beforeSend'=>'function(){
                           $("#AjaxLoader").show();
                      }'
                ),array('id'=>'ajaxSubmitButton','class'=>'btn btn-primary btn-sm')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script>
    CKEDITOR.replace('Pages[content]');
    //CKEDITOR.instances.Pages_content.updateElement();
    /*function updateAllMessageForms()
    {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
    }*/
</script>