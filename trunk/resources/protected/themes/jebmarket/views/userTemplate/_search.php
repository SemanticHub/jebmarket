<?php
/* @var $this UserTemplateController */
/* @var $model UserTemplate */
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
		<?php echo $form->label($model,'custom_template'); ?>
		<?php echo $form->textArea($model,'custom_template',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'custom_js'); ?>
		<?php echo $form->textArea($model,'custom_js',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'custom_css'); ?>
		<?php echo $form->textArea($model,'custom_css',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'update_date'); ?>
		<?php echo $form->textField($model,'update_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jebapp_template_id'); ?>
		<?php echo $form->textField($model,'jebapp_template_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jebapp_user_id'); ?>
		<?php echo $form->textField($model,'jebapp_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->