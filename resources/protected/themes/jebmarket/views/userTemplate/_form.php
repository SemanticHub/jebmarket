<?php
/* @var $this UserTemplateController */
/* @var $model UserTemplate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-template-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'custom_template'); ?>
		<?php echo $form->textArea($model,'custom_template',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'custom_template'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'custom_js'); ?>
		<?php echo $form->textArea($model,'custom_js',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'custom_js'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'custom_css'); ?>
		<?php echo $form->textArea($model,'custom_css',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'custom_css'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
		<?php echo $form->error($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jebapp_template_id'); ?>
		<?php echo $form->textField($model,'jebapp_template_id'); ?>
		<?php echo $form->error($model,'jebapp_template_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jebapp_user_id'); ?>
		<?php echo $form->textField($model,'jebapp_user_id'); ?>
		<?php echo $form->error($model,'jebapp_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->