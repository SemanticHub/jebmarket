<?php
/* @var $this UserController */
/* @var $model Password */
/* @var $form CActiveForm */
$this->pageTitle = Yii::app()->name . ' - Change Password';
$this->pageHeader = "Change Current Password";
?>
<div class="row">
    <div class="col-md-12">
        <div class="form-control-wrapper" style="max-width: 400px">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'change-password-form',
                'enableClientValidation' => true,
                'enableAjaxValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions' => array('role' => 'form')
            ));
            ?>
            <div class="note bs-callout bs-callout-warning">
                <p>Fields with <span class="required">*</span> are required.</p>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'old_password', array('class' => 'control-label')); ?>
                <?php echo $form->passwordField($model, 'old_password', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'old_password', array('class' => 'text-danger control-hint')); ?>
            </div>
            <div class="form-group">
                <?php echo $form->labelEx($model, 'new_password', array('class' => 'control-label')); ?>
                <?php echo $form->passwordField($model, 'new_password', array('class' => 'form-control')); ?>
                <?php echo $form->error($model, 'new_password', array('class' => 'text-danger control-hint')); ?>
            </div>
            <div class="form-group buttons">
                <?php echo CHtml::submitButton('Change', array('class' => 'btn btn-primary')); ?>
            </div>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>