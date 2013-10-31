<?php
/**
 * @var $this SettingsController
 * @var $model Settings
 * @var $form CActiveForm
 **/

$form = $this->beginWidget('CActiveForm', array(
    'id' => 'settings-form',
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'focus' => 'input[type="text"]:first',
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    )
)); ?>
    <div class="note bs-callout bs-callout-info">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    </div>

<?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'readonly'=>($model->scenario == 'update') ? true : false)); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'description', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'options', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'options', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'options', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'value', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'value', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'value', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'type', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'type', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'type', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'validation', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'validation', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'validation', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'tag', array('class' => 'control-label col-sm-2')); ?>
        <div class="col-sm-10">
            <?php echo $form->textField($model, 'tag', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'tag', array('class' => 'text-danger control-hint')); ?>
            <p class="control-hint text-warning">
                <strong><?php echo Yii::t('phrase', 'Used Tags: ') ?></strong>
                <?php
                echo Settings::getTags();
                ?>
            </p>
        </div>
    </div>

    <div class="form-group buttons">
    <label class="control-label col-lg-2"></label>
    <div class="col-lg-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>
<?php $this->endWidget(); ?>