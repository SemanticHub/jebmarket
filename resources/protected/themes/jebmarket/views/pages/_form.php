<div class="form_page">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'pages-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
            'afterValidate'=>'js:$.yii.fix.ajaxSubmit.afterValidate'
        ),
        'focus' => 'input[type="text"]:first',
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form',
        ),
    ));
    ?>
    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'title', array('class' => 'control-label col-lg-12')); ?>
        <div class="col-lg-12">
            <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'title', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'content', array('class' => 'control-label col-lg-12')); ?>
        <div class="col-lg-12">
            <?php echo $form->textArea($model, 'content', array('form-groups' => 6, 'cols' => 50, 'class' => 'ckeditor form-control')); ?>
            <?php echo $form->error($model, 'content', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group buttons">
        <div class="col-lg-12">
            <?php echo CHtml::ajaxButton('Save', CHtml::normalizeUrl(array('pages/update','id'=>$model->id))); ?>
        </div>
    </div>
    <?php $this->endWidget(); ?>
</div>
<script type="text/javascript">
    var CKEDITOR_BASEPATH = '<?php echo Yii::app()->theme->baseUrl.'/comp/ckeditor/'; ?>';
</script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/ckeditor/ckeditor.js"></script>