<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'focus' => 'input[type="text"]:first',
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    ),
    'clientOptions' => array(
        'inputContainer' => 'div.form-group',
        'successCssClass' => 'has-success',
        'errorCssClass' => 'has-error',
        'afterValidateAttribute' => new CJavaScriptExpression(
                'function(form, attribute, data, hasError){
                    if (console) console.log(form);
                    if (console) console.log(attribute);
                    if (console) console.log(data);
                    if (console) console.log(hasError);
                    $("#"+attribute.inputID).nextAll().remove();
                    if(hasError) {
                        $("<span class=\"glyphicon glyphicon-remove glyphicon-has-error\"></span>").insertAfter($("#"+attribute.inputID));
                    } else {

                        $("<span class=\"glyphicon glyphicon-ok glyphicon-has-success\"></span>").insertAfter($("#"+attribute.inputID));
                    }
                }'
            )
    )
));

echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

<div class="form-group">
    <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-lg-3')); ?>
    <div class="col-lg-9">
        <?php echo $form->textField($model, 'username', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'username', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-lg-3')); ?>
    <div class="col-lg-9">
        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'email', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-lg-3')); ?>
    <div class="col-lg-9">
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'password', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<?php if (CCaptcha::checkRequirements()): ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'verifyCode', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php $this->widget('CCaptcha', array('buttonOptions' => array('class' => 'btn btn-info'))); ?>
            <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control', 'style' => 'width:150px; margin-left: 0; display:inline')); ?>
            <p class="control-hint text-warning">Please enter the letters as they are shown in the image above.
                Letters are not case-sensitive.
                <?php echo $form->error($model, 'verifyCode', array('class' => 'text-danger control-hint')); ?>
            </p>
        </div>
    </div>
<?php endif; ?>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <label class="panel-title" style="font-size: 14px">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Optional Details <span class="glyphicon glyphicon-plus"></span>
                </a>
            </label>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" style="background: #F7F5FA">
            <div class="panel-body">
                <div class="form-group">
                    <?php echo $form->labelEx($model->userDetails, 'organization', array('class' => 'control-label col-lg-3')); ?>
                    <div class="col-lg-9">
                        <?php echo $form->textField($model->userDetails, 'organization', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
                        <?php echo $form->error($model->userDetails, 'organization', array('class' => 'text-danger control-hint')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model->userDetails, 'f_name', array('class' => 'control-label col-lg-3')); ?>
                    <div class="col-lg-9">
                        <?php echo $form->textField($model->userDetails, 'f_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
                        <?php echo $form->error($model->userDetails, 'f_name', array('class' => 'text-danger control-hint')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model->userDetails, 'l_name', array('class' => 'control-label col-lg-3')); ?>
                    <div class="col-lg-9">
                        <?php echo $form->textField($model->userDetails, 'l_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
                        <?php echo $form->error($model->userDetails, 'l_name', array('class' => 'text-danger control-hint')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model->userDetails, 'location', array('class' => 'control-label col-lg-3')); ?>
                    <div class="col-lg-9">
                            <?php //echo $form->textField($model->userDetails, 'location', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
                                <?php
                                $listData = Location::model()->findAll(array('condition' => 'parent_id IS NULL', 'order' => 'name'));
                                echo CHtml::dropDownList(
                                    'location_root',
                                    '',
                                    CHtml::listData(
                                        $listData,
                                        'id',
                                        'name'
                                    ),
                                    array(
                                        'empty' => 'SELECT A COUNTRY',
                                        'class' => 'form-control',
                                    )
                                );
                                ?>
                    </div>
                    <?php echo $form->error($model->userDetails, 'location', array('class' => 'text-danger control-hint')); ?>

                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model->userDetails, 'address1', array('class' => 'control-label col-lg-3')); ?>
                    <div class="col-lg-9">
                        <?php echo $form->textField($model->userDetails, 'address1', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
                        <?php echo $form->error($model->userDetails, 'address1', array('class' => 'text-danger control-hint')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model->userDetails, 'phone', array('class' => 'control-label col-lg-3')); ?>
                    <div class="col-lg-9">
                        <?php echo $form->textField($model->userDetails, 'phone', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                        <?php echo $form->error($model->userDetails, 'phone', array('class' => 'text-danger control-hint')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model->userDetails, 'fax', array('class' => 'control-label col-lg-3')); ?>
                    <div class="col-lg-9">
                        <?php echo $form->textField($model->userDetails, 'fax', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
                        <?php echo $form->error($model->userDetails, 'fax', array('class' => 'text-danger control-hint')); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-lg-2">Terms</label>

    <div class="col-lg-10">
        <div class="note bs-callout bs-callout-danger">
            <p class="text-danger">By clicking on <b>"Create an account"</b> below, you are agreeing to the <a href="#">Terms
                    of Service</a> and the <a href="#">Privacy Policy</a></p>
        </div>
    </div>
</div>
<div class="form-group buttons">
    <label class="control-label col-lg-2"></label>

    <div class="col-lg-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create an account' : 'Save', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php echo $form->hiddenField($model->userDetails, 'country') ?>
<?php $this->endWidget(); ?>
<script type="text/javascript">
    $(function () {
        $('#location_root').live('change', function () {
            $.ajax({
                type: "POST",
                url: "<?php echo $this->createUrl('location/levels'); ?>",
                data: { location_id: $(this).val() }
            }).done(function (data) {
                    //if(console) console.log(data);
                    $('#location-level-view').empty();
                    var wrapper = $('<div/>').attr('class', 'col-xs-4');
                    $(data).appendTo(wrapper);
                    $(wrapper).appendTo($('#location-level-view'));
                });
        });
        $('#location-level-view select').live('change', function (e) {
            $(e.target).parent().nextAll().remove();
            $.ajax({
                type: "POST",
                url: "<?php echo $this->createUrl('location/levels'); ?>",
                data: { location_id: $(this).val() }
            }).done(function (data) {
                    if (data) {
                        var wrapper = $('<div/>').attr('class', 'col-xs-4');
                        $(data).appendTo(wrapper);
                        $(wrapper).appendTo($('#location-level-view'));
                    } else {
                        // alert('that was last');
                        $('#location-level-view select').last().attr('name', 'UserDetails[location]');
                    }
                    //if(console) console.log(data);
                });
        });
    });
</script>