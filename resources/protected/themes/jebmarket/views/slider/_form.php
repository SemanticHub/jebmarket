<?php
/* @var $this SliderController */
/* @var $model Slider */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'slider-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form', 'enctype' => 'multipart/form-data')
));
?>

<div class="note bs-callout bs-callout-info">
    <p class="note">Fields with <span class="required">*</span> are required.</p>
</div>

<?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

<div class="form-group">
    <?php echo $form->labelEx($model, 'headline', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'headline', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'headline', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'content', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textArea($model, 'content', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'content', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'image', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <div class="fileupload fileupload-new" data-provides="fileupload">
            <div>
                <span class="btn btn-warning btn-file">
                    <span class="fileupload-new">Select image</span>
                    <span class="fileupload-exists">Change</span>
                    <?php echo $form->FileField($model, 'image'); ?>
                </span>
                <a href="#" class="btn btn-warning fileupload-exists" data-dismiss="fileupload">Remove</a>
            </div>
            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                <img src="<?php echo ($model->oldSlideImage) ? Yii::app()->baseUrl.'/'.Yii::app()->params['uploadUrl'].$model->oldSlideImage : 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image' ?>" />
            </div>
            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>            
        </div>        
        <?php echo $form->error($model, 'image', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'tag', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'tag', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'tag', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'order', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'order', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'order', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'class', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'class', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'class', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group buttons">
    <label class="control-label col-lg-2"></label>
    <div class="col-lg-10">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/app.js"></script>  