<?php
/* @var $this ProductController */
/* @var $model Product */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'product-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'store_id'); ?>
		<?php echo $form->textField($model,'store_id'); ?>
		<?php echo $form->error($model,'store_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sku'); ?>
		<?php echo $form->textField($model,'sku',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'sku'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barcode_type'); ?>
		<?php echo $form->textField($model,'barcode_type',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'barcode_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barcode_value'); ?>
		<?php echo $form->textField($model,'barcode_value',array('size'=>60,'maxlength'=>64)); ?>
		<?php echo $form->error($model,'barcode_value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'short_details'); ?>
		<?php echo $form->textField($model,'short_details',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'short_details'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added'); ?>
		<?php echo $form->textField($model,'added'); ?>
		<?php echo $form->error($model,'added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modified'); ?>
		<?php echo $form->textField($model,'modified'); ?>
		<?php echo $form->error($model,'modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'published'); ?>
		<?php echo $form->textField($model,'published'); ?>
		<?php echo $form->error($model,'published'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity'); ?>
		<?php echo $form->textField($model,'quantity'); ?>
		<?php echo $form->error($model,'quantity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'default_image'); ?>
		<?php echo $form->textField($model,'default_image',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'default_image'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->