<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'slider-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form',
        'enctype' => 'multipart/form-data'
    )
));
?>
<div class="form-control-wrapper">
    <div class="note bs-callout bs-callout-info">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    </div>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'headline', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'headline', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'headline', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'content', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textArea($model, 'content', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'content', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'image', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px; float: left;">
                    <img id="slider_image_img" src="<?php echo ($model->image)?Yii::app()->baseUrl.'/' . Yii::app()->params['sliderImageUrl'].$model->image:'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image' ?>"/>
                </div>
                <?php
                $this->widget('ext.JebUpload.JebUpload',
                    array(
                        'id'=>'uploadFile',
                        'config'=>array(
                            'action'=>Yii::app()->createUrl('slider/Uploadslider'),
                            'allowedExtensions'=>array("jpg", "jpeg", "gif", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
                            'sizeLimit'=>1024*1024* 5,// maximum file size in 50MB
                            'minSizeLimit'=>10*1024,// minimum file size in 10KB
                            'onSubmit'=>"js:function(file, extension) {
                                    $('div.preview').addClass('loading');
                                  }",
                            'onComplete'=>"js:function(file, response, responseJSON) {
                                  $('#slider_image_img').load(function(){
                                    $('div.preview').removeClass('loading');
                                    $('#slider_image_img').unbind();
                                    $('#Slider_image').val(responseJSON['filename']);
                                    $('#Associazioni_logo').val(responseJSON['filename']);
                                  });
                                  $('#slider_image_img').attr('src', '".Yii::app()->baseUrl."/".Yii::app()->params['sliderImageUrl']."tmp/'+responseJSON['filename']);
                                }",
                        )
                    ));
                ?>
            </div>
            <?php echo $form->textField($model, 'image', array('style'=>'display: none;')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'tag', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'tag', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'tag', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'order', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'order', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'order', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'class', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'class', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'class', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group buttons">
        <label class="control-label col-lg-3"></label>

        <div class="col-lg-9">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>