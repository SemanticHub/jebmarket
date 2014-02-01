<?php
/* @var $this BlogPostController */
/* @var $model BlogPost */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_content'); ?>
		<?php echo $form->textArea($model,'post_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_title'); ?>
		<?php echo $form->textArea($model,'post_title',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_name'); ?>
		<?php echo $form->textField($model,'post_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_status'); ?>
		<?php echo $form->textField($model,'post_status',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_status'); ?>
		<?php echo $form->textField($model,'comment_status',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_date'); ?>
		<?php echo $form->textField($model,'post_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_modified'); ?>
		<?php echo $form->textField($model,'post_modified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'post_parent'); ?>
		<?php echo $form->textField($model,'post_parent',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_count'); ?>
		<?php echo $form->textField($model,'comment_count',array('size'=>20,'maxlength'=>20)); ?>
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