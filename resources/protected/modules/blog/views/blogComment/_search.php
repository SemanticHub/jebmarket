<?php
/* @var $this BlogCommentController */
/* @var $model BlogComment */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'comment_id'); ?>
		<?php echo $form->textField($model,'comment_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author'); ?>
		<?php echo $form->textArea($model,'comment_author',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author_email'); ?>
		<?php echo $form->textField($model,'comment_author_email',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author_url'); ?>
		<?php echo $form->textField($model,'comment_author_url',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_author_IP'); ?>
		<?php echo $form->textField($model,'comment_author_IP',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_content'); ?>
		<?php echo $form->textArea($model,'comment_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_status'); ?>
		<?php echo $form->textField($model,'comment_status',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_agent'); ?>
		<?php echo $form->textField($model,'comment_agent',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_parent'); ?>
		<?php echo $form->textField($model,'comment_parent',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_date'); ?>
		<?php echo $form->textField($model,'comment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comment_date_gmt'); ?>
		<?php echo $form->textField($model,'comment_date_gmt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jebapp_blog_post_id'); ?>
		<?php echo $form->textField($model,'jebapp_blog_post_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->