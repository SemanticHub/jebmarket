<div class="form-control-wrapper">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'email-template-form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
    )); ?>
    <div class="note bs-callout bs-callout-info">
        <p class="note">Fields with <span class="required">*</span> are required.<br/> <strong>Following template
                variables can be use in body & subject</strong></p>
        <?php
        $mailer = new JebMailer;
        $tempVars = $mailer->_vars;
        foreach ($tempVars as $tempVar => $tempVal) {
            echo '<b>' . $tempVal['label'] . '</b> ------ <i>' . $tempVal['desc'] . '</i><br />';
        }
        ?>
    </div>
    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'subject', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'subject', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'subject', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'body', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textArea($model, 'body', array('form-groups' => 6, 'cols' => 50, 'class' => 'ckeditor form-control')); ?>
            <?php echo $form->error($model, 'body', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'tag', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'tag', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'tag', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group buttons">
        <label class="control-label col-lg-2"></label>

        <div class="col-lg-10">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/ckeditor/ckeditor.js"></script>
    <?php $this->endWidget(); ?>
</div>