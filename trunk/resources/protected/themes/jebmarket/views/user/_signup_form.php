<?php
/**
 * @var $this UserController
 * @var $model User
 **/

$form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
));

echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

<div class="form-group">
    <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'username', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'username', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'email', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'password', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<?php if (CCaptcha::checkRequirements()): ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'verifyCode', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php $this->widget('CCaptcha', array('buttonOptions' => array('class' => 'btn btn-info'))); ?>
            <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control', 'style'=>'width:150px; margin-left: 10px; display:inline')); ?>
            <p class="control-hint text-warning">Please enter the letters as they are shown in the image above.
                Letters are not case-sensitive.
                <?php echo $form->error($model, 'verifyCode', array('class' => 'text-danger control-hint')); ?>
            </p>
        </div>
    </div>
<?php endif; ?>

<div class="panel-group" id="accordion">
    <div class="panel panel-info">
        <div class="panel-heading">
            <label class="panel-title" style="font-size: 14px">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    Optional Details <span class="glyphicon glyphicon-plus"></span>
                </a>
            </label>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="row">
                    <?php echo $form->labelEx($model,'f_name'); ?>
                    <?php echo $form->textField($model,'f_name',array('size'=>60,'maxlength'=>100)); ?>
                    <?php echo $form->error($model,'f_name'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'l_name'); ?>
                    <?php echo $form->textField($model,'l_name',array('size'=>60,'maxlength'=>100)); ?>
                    <?php echo $form->error($model,'l_name'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'organization'); ?>
                    <?php echo $form->textField($model,'organization',array('size'=>60,'maxlength'=>100)); ?>
                    <?php echo $form->error($model,'organization'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'address1'); ?>
                    <?php echo $form->textField($model,'address1',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'address1'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'address2'); ?>
                    <?php echo $form->textField($model,'address2',array('size'=>60,'maxlength'=>255)); ?>
                    <?php echo $form->error($model,'address2'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'country'); ?>
                    <?php echo $form->textField($model,'country',array('size'=>60,'maxlength'=>100)); ?>
                    <?php echo $form->error($model,'country'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'state'); ?>
                    <?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>100)); ?>
                    <?php echo $form->error($model,'state'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'city'); ?>
                    <?php echo $form->textField($model,'city',array('size'=>60,'maxlength'=>100)); ?>
                    <?php echo $form->error($model,'city'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'zip'); ?>
                    <?php echo $form->textField($model,'zip',array('size'=>60,'maxlength'=>100)); ?>
                    <?php echo $form->error($model,'zip'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'phone'); ?>
                    <?php echo $form->textField($model,'phone',array('size'=>45,'maxlength'=>45)); ?>
                    <?php echo $form->error($model,'phone'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model,'fax'); ?>
                    <?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45)); ?>
                    <?php echo $form->error($model,'fax'); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label class="control-label col-lg-2"></label>
    <div class="col-lg-10">
        <div class="note bs-callout bs-callout-danger">
            <p class="text-danger">By clicking on <b>"Create an account"</b> below, you are agreeing to the <a href="#">Terms of Service</a> and the <a href="#">Privacy Policy</a></p>
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