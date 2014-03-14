<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'website-form',
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'focus' => 'input[type="text"]:first',
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form',
    ),
    'clientOptions' => array(
        'validateOnSubmit'=>true,
        'inputContainer' => 'div.form-group',
        'successCssClass' => 'has-success',
        'errorCssClass' => 'has-error',
        'afterValidateAttribute' => new CJavaScriptExpression(
                'function(form, attribute, data, hasError){
                    $("#"+attribute.inputID).parent().find("span.glyphicon").remove();
                    if(hasError == true) {
                        $("<span class=\"glyphicon glyphicon-remove glyphicon-has-error\"></span>").insertAfter($("#"+attribute.inputID));
                    } else {
                        $("<span class=\"glyphicon glyphicon-ok glyphicon-has-success\"></span>").insertAfter($("#"+attribute.inputID));
                    }
                }'
            ),
    )
));
echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
<div class="form-group">
    <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-6">
        <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'domain', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-6">
        <?php echo $form->textField($model, 'domain', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'domain', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-6">
        <?php echo $form->textArea($model,'description', array('rows'=>6, 'cols'=>50, 'class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'description', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-6">
        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'email', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'meta_title', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-6">
        <?php echo $form->textField($model, 'meta_title', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'meta_title', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'meta_desc', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-6">
        <?php echo $form->textArea($model,'meta_desc', array('rows'=>6, 'cols'=>50, 'class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'meta_desc', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'meta_keywords', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-6">
        <?php echo $form->textField($model, 'meta_keywords', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control input-sm')); ?>
        <?php echo $form->error($model, 'meta_keywords', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group buttons">
    <div class="col-lg-8" style="text-align: right">
        <?php echo CHtml::submitButton('Save Settings', array('class' => 'btn btn-success')); ?>
    </div>
</div>
<?php $this->endWidget(); ?>