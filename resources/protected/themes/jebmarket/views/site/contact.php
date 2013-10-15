<?php
/* @var $this SiteController */
/* @var $model ContactForm */
$this->pageTitle = Yii::app()->name . ' - Contact Us';
?>
    <h1 class="page-title">Contact Us</h1>
<?php if (Yii::app()->user->hasFlash('contact')): ?>
    <div class="alert alert-success">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>
<?php else: ?>
    <div class="note bs-callout bs-callout-info">
        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank
            you.<br/>
            Fields with <span class="required">*</span> are required.
        </p>
    </div>
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'contact-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
    ));
    ?>
    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'name', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'email', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'subject', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'subject', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'body', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textArea($model, 'body', array('form-groups' => 6, 'rows' => 3, 'cols' => 50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'body', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <?php if (CCaptcha::checkRequirements()): ?>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'verifyCode', array('class' => 'control-label col-lg-2')); ?>
            <div class="col-lg-10">
                <?php $this->widget('CCaptcha', array('buttonOptions' => array('class' => 'btn btn-default'))); ?>
                <?php echo $form->textField($model, 'verifyCode', array('class' => 'form-control')); ?>
                <p class="hint text-warning">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</p>
                <?php echo $form->error($model, 'verifyCode', array('class' => 'text-danger control-hint')); ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="form-group buttons">
        <div class="col-lg-2"></div>
        <div class="col-lg-10">
            <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
    <?php $this->endWidget();
    if (!Yii::app()->request->isPostRequest)
        Yii::app()->clientScript->registerScript(
            'initCaptcha',
            '$("#yw0_button").trigger("click");',
            CClientScript::POS_READY
        );
    ?>
<?php endif; ?>