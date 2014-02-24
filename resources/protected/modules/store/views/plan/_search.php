<?php
/* @var $this StorePlanController */
/* @var $model StorePlan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'is_default'); ?>
		<?php echo $form->textField($model,'is_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumb_width_height'); ?>
		<?php echo $form->textField($model,'thumb_width_height',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_width_height'); ?>
		<?php echo $form->textField($model,'image_width_height',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_max_size'); ?>
		<?php echo $form->textField($model,'image_max_size',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'image_per_product'); ?>
		<?php echo $form->textField($model,'image_per_product'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_disk_space'); ?>
		<?php echo $form->textField($model,'max_disk_space'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'max_bandwidth'); ?>
		<?php echo $form->textField($model,'max_bandwidth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'product_per_store'); ?>
		<?php echo $form->textField($model,'product_per_store'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_fee'); ?>
		<?php echo $form->textField($model,'transaction_fee',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_period'); ?>
		<?php echo $form->textField($model,'transaction_period'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'transaction_fee_type'); ?>
		<?php echo $form->textField($model,'transaction_fee_type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->