<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'store-plan-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_default'); ?>
		<?php echo $form->textField($model,'is_default'); ?>
		<?php echo $form->error($model,'is_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumb_width_height'); ?>
		<?php echo $form->textField($model,'thumb_width_height',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'thumb_width_height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_width_height'); ?>
		<?php echo $form->textField($model,'image_width_height',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'image_width_height'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_max_size'); ?>
		<?php echo $form->textField($model,'image_max_size',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'image_max_size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_per_product'); ?>
		<?php echo $form->textField($model,'image_per_product'); ?>
		<?php echo $form->error($model,'image_per_product'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_disk_space'); ?>
		<?php echo $form->textField($model,'max_disk_space'); ?>
		<?php echo $form->error($model,'max_disk_space'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_bandwidth'); ?>
		<?php echo $form->textField($model,'max_bandwidth'); ?>
		<?php echo $form->error($model,'max_bandwidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product_per_store'); ?>
		<?php echo $form->textField($model,'product_per_store'); ?>
		<?php echo $form->error($model,'product_per_store'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_fee'); ?>
		<?php echo $form->textField($model,'transaction_fee',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'transaction_fee'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_period'); ?>
		<?php echo $form->textField($model,'transaction_period'); ?>
		<?php echo $form->error($model,'transaction_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'transaction_fee_type'); ?>
		<?php echo $form->textField($model,'transaction_fee_type'); ?>
		<?php echo $form->error($model,'transaction_fee_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->