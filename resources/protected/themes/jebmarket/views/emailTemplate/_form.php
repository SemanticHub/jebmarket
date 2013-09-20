<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
/* @var $form CActiveForm */
?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'email-template-form',
    'enableClientValidation' => true,
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
    ),
    'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
)); ?>
<div class="note bs-callout bs-callout-info">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
</div>
<?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
	<div class="form-group">
		<?php echo $form->labelEx($model,'name', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'name', array('class' => 'text-danger control-hint')); ?>
    </div>
	</div>
	<div class="form-group">
		<?php echo $form->labelEx($model,'body', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
		<?php echo $form->textArea($model,'body',array('form-groups'=>6, 'cols'=>50, 'class' => 'ckeditor form-control')); ?>
		<?php echo $form->error($model,'body', array('class' => 'text-danger control-hint')); ?>
    </div>
	</div>
    <div class="form-group">
        <label class="control-label col-lg-2">Template Variables</label>
        <div class="col-lg-10">
            <div class="note bs-callout bs-callout-info">
                <?php
                foreach (Yii::app()->params['emailTemplateVars'] as $tempVar => $tempVal) {
                    echo $tempVar . ' ------ ' . $tempVal . '<br />';
                }
                ?>
            </div>
        </div>
    </div>
	<div class="form-group buttons">
    <label class="control-label col-lg-2"></label>
        <div class="col-lg-10">
		    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
	</div>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/comp/ckeditor/ckeditor.js"></script>
<?php $this->endWidget(); ?>