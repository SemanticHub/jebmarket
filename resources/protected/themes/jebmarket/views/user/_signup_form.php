<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<div class="form">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
    )); ?>

    <div class="note bs-callout bs-callout-warning">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    </div>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

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
                <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>
                <p class="control-hint text-warning">Please enter the letters as they are shown in the image above.
                    Letters are not case-sensitive.
                    <?php echo $form->error($model, 'verifyCode', array('class' => 'text-danger control-hint')); ?>
                </p>
            </div>
        </div>
    <?php endif; ?>

    <div class="note bs-callout bs-callout-danger">
        <p class="note">By clicking on "Create an account" below, you are agreeing to the Terms of Service and the
            Privacy Policy.</p>
    </div>

    <div class="form-group buttons">
        <label class="control-label col-lg-2"></label>

        <div class="col-lg-10">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create an account' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

    <?php echo $form->hiddenField($model->userDetails, 'country') ?>
    <?php //echo $form->hiddenField($model, 'userDetails.state') ?>
    <?php //echo $form->hiddenField($model, 'userDetails.city') ?>

    <?php $this->endWidget(); ?>
</div>