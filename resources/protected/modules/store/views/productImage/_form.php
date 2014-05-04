<?php
/* @var $this ProductImageController */
/* @var $model ProductImage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-image-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'product_id'); ?>
		<?php echo $form->textField($model,'product_id'); ?>
		<?php echo $form->error($model,'product_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image_file'); ?>
		<?php echo $form->textField($model,'image_file',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'image_file'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alt_text'); ?>
		<?php echo $form->textField($model,'alt_text',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alt_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title_txt'); ?>
		<?php echo $form->textField($model,'title_txt',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title_txt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'order'); ?>
		<?php echo $form->textField($model,'order'); ?>
		<?php echo $form->error($model,'order'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_default'); ?>
		<?php echo $form->textField($model,'is_default'); ?>
		<?php echo $form->error($model,'is_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'tag'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->