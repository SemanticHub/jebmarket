<?php
/* @var $this TemplateController */
/* @var $model Template */
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
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'color'); ?>
		<?php echo $form->textField($model,'color',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'columns'); ?>
		<?php echo $form->textField($model,'columns',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'layout'); ?>
		<?php echo $form->textField($model,'layout',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categories'); ?>
		<?php echo $form->textField($model,'categories',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_categories'); ?>
		<?php echo $form->textField($model,'sub_categories',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'features'); ?>
		<?php echo $form->textField($model,'features',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner_name'); ?>
		<?php echo $form->textField($model,'owner_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'owner_email'); ?>
		<?php echo $form->textField($model,'owner_email',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'visibility'); ?>
		<?php echo $form->textField($model,'visibility',array('size'=>45,'maxlength'=>45)); ?>
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
		<?php echo $form->label($model,'jebapp_user_id'); ?>
		<?php echo $form->textField($model,'jebapp_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->