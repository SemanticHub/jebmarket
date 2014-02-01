<?php
/* @var $this BlogCommentController */
/* @var $model BlogComment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-comment-form',
	'enableAjaxValidation'=>true,
)); ?>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author'); ?>
		<?php echo $form->textArea($model,'comment_author',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment_author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author_email'); ?>
		<?php echo $form->textField($model,'comment_author_email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'comment_author_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_author_url'); ?>
		<?php echo $form->textField($model,'comment_author_url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'comment_author_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment_content'); ?>
		<?php echo $form->textArea($model,'comment_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment_content'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->