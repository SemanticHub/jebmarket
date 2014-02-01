<?php
/* @var $this BlogTermsController */
/* @var $model BlogTerms */
/* @var $form CActiveForm */
?>

<div class="row blog_form">
<div class="col-md-6">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-terms-form',
	'enableAjaxValidation'=>true,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    )
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'The name is how it appears on your site')); ?>
        <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'slug', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'slug', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'The “slug” is the URL-friendly version of the name')); ?>
        <?php echo $form->error($model, 'slug', array('class' => 'text-danger control-hint')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'parent', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model, 'parent', CHtml::listData(BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category' AND jebapp_user_id =".Yii::app()->user->id)), 'term_id', 'name'), array('empty'=>'--SELECT--', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'parent', array('class' => 'text-danger control-hint')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label')); ?>
        <?php echo $form->textArea($model, 'description', array('rows'=>6, 'cols'=>50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'description', array('class' => 'text-danger control-hint')); ?>
    </div>

    <div class="form-group buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
    </div>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->