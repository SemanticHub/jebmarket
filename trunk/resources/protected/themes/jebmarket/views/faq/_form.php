<div class="form-control-wrapper">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'faq-form',
        'enableAjaxValidation' => true,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        )
    ));
    ?>
    <div class="note bs-callout bs-callout-info">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    </div>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'faq', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textArea($model, 'faq', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'faq', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'answer', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textArea($model, 'answer', array('form-groups' => 6, 'cols' => 50, 'class' => 'form-control ckeditor')); ?>
            <?php echo $form->error($model, 'answer', array('class' => 'text-danger control-hint')); ?>
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
        <?php echo $form->labelEx($model, 'tag', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'tag', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'tag', array('class' => 'text-danger control-hint')); ?>
            <p class="control-hint text-warning">
                <strong><?php echo Yii::t('phrase', 'Used Tags: ') ?></strong>
                <?php
                echo Faq::getTags();
                ?>
            </p>
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
</div>