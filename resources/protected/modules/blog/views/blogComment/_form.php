<?php
/* @var $this BlogCommentController */
/* @var $model BlogComment */
/* @var $form CActiveForm */
?>

<div class="row blog_form">
    <div class="col-md-6">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-comment-form',
	'enableAjaxValidation'=>true,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    )
)); ?>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment_author', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'comment_author', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'comment_author', array('class' => 'text-danger control-hint')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment_author_email', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'comment_author_email', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'comment_author_email', array('class' => 'text-danger control-hint')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment_author_url', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'comment_author_url', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'comment_author_url', array('class' => 'text-danger control-hint')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'comment_content', array('class' => 'control-label')); ?>
            <?php echo $form->textArea($model, 'comment_content', array('rows'=>6, 'cols'=>50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'comment_content', array('class' => 'text-danger control-hint')); ?>
        </div>

        <div class="form-group buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
        </div>

<?php $this->endWidget(); ?>
    </div>
</div><!-- form -->