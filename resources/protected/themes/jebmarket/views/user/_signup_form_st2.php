<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form-2',
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
        'afterValidate'=>'js:function(form,data,hasError){
                        if(!hasError){
                                $.ajax({
                                        "type":"POST",
                                        "url":"'.CHtml::normalizeUrl(array("user/step2")).'",
                                        "data":form.serialize(),
                                        }).done(function (data) {
                                            $("#signup_box2").modal(data);
                                            $("#signup_box3").modal({
                                                remote : "user/step3",
                                                backdrop: "static",
                                                keyboard: false
                                            });
                                        });
                                }
                        }',
    )
));

echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control input-sm')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'domain', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model, 'domain', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control input-sm')); ?>
            <?php echo $form->error($model, 'domain', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group buttons">
        <div class="col-lg-10">
            <?php echo CHtml::submitButton('Save Business Details', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
<?php $this->endWidget(); ?>