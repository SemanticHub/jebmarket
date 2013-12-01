<div class="form-control-wrapper">
<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'user-form',
    'enableAjaxValidation' => false,
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
        <?php echo $form->labelEx($model, 'username', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'username', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'email', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'email', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'email', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'password', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'activationstatus', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'activationstatus', array('size' => 1, 'maxlength' => 1, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'activationstatus', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'status', array('size' => 1, 'maxlength' => 1, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'status', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'timezone', array('class' => 'control-label col-lg-3')); ?>
        <div class="col-lg-9">
            <?php echo $form->textField($model, 'timezone', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'timezone', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <?php if(isset($model->id)) { ?>
    <div class="form-group">
        <label class="control-label col-lg-3"><?php echo Yii::t('phrase', 'Role') ?></label>
        <div class="col-lg-9">
            <?php $roles = Rights::getAssignedRoles($model->id); ?>
            <?php echo CHtml::dropDownList('user_role', key($roles) ,Rights::getAuthItemSelectOptions(2),array('class'=>'form-control')) ?>
        </div>
    </div>
    <?php } ?>
    <div class="form-group buttons">
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>
</div>