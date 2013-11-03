<?php
 $form = $this->beginWidget('CActiveForm', array(
    'id' => 'location-level-form',
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
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'code', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'code', array('size' => 3, 'maxlength' => 3, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'code', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'dial_code', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'dial_code', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'dial_code', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'next_level_name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'next_level_name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'next_level_name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'parent_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php //echo $form->textField($model, 'parent_id', array('class' => 'form-control')); ?>
            <?php
            $listData = LocationLevel::model()->findAll(array('order' => 'name'));
            echo $form->dropDownList(
                $model,
                'parent_id',
                CHtml::listData(
                    $listData,
                    'id',
                    'levelinfo'
                ),
                array(
                    'empty'=>'--SELECT--',
                    'class' => 'form-control'
                )
            );
            ?>
            <?php echo $form->error($model, 'parent_id', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group buttons">
        <label class="control-label col-lg-2"></label>

        <div class="col-lg-10">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>