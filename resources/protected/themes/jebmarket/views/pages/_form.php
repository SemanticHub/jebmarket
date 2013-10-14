<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'pages-form',
    'enableAjaxValidation' => true,
    'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
));
?>
<div class="note bs-callout bs-callout-info">
    <p class="note">Fields with <span class="required">*</span> are required.</p>
</div>
<?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
<div class="form-group">
    <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'title', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'slug', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'slug', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'slug', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'content', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textArea($model, 'content', array('form-groups' => 6, 'cols' => 50, 'class' => 'ckeditor form-control')); ?>
        <?php echo $form->error($model, 'content', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'meta_desc', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textArea($model, 'meta_desc', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'meta_desc', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'meta_keywords', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'meta_keywords', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'meta_keywords', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group rememberMe">
    <span class="col-lg-2"></span>    
    <div class="col-lg-10">        
        <?php echo $form->checkBox($model, 'active', array('size' => 1, 'maxlength' => 1, 'checked' => 'checked')); ?>
        <?php echo $form->labelEx($model, 'active', array('class' => 'control-label')); ?>
        <?php echo $form->error($model, 'active', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group buttons">
    <label class="control-label col-lg-2"></label>
    <div class="col-lg-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/ckeditor/ckeditor.js"></script>
<?php $this->endWidget(); ?>