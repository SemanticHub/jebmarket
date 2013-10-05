<?php if ($model->scenario === 'update'): ?>
    <h3>
        <?php echo Rights::getAuthItemTypeName($model->type); ?>
        '<?php echo Rights::t('core', ':name', array(
            ':name'=>$model->name,
            ':type'=>Rights::getAuthItemTypeName($model->type),
        ));?>'
    </h3>
<?php endif; ?>

<?php $form = $this->beginWidget('CActiveForm', array(
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
)); ?>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'name', array('maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-control-hint text-warning')); ?>
            <p class="control-hint text-warning"><?php echo Rights::t('core', 'Do not change the name unless you know what you are doing.'); ?></p>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'description', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'description', array('maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description', array('class' => 'text-danger control-control-hint text-warning')); ?>
            <p class="control-hint text-warning"><?php echo Rights::t('core', 'A descriptive name for this item.'); ?></p>
        </div>
    </div>

<?php if (Rights::module()->enableBizRule === true): ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'bizRule', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'bizRule', array('maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'bizRule', array('class' => 'text-danger control-control-hint text-warning')); ?>
            <p class="control-hint text-warning"><?php echo Rights::t('core', 'Code that will be executed when performing access checking.'); ?></p>
        </div>
    </div>
<?php endif; ?>

<?php if (Rights::module()->enableBizRule === true && Rights::module()->enableBizRuleData): ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'data', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'data', array('maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'data', array('class' => 'text-danger control-control-hint text-warning')); ?>
            <p class="control-hint text-warning"><?php echo Rights::t('core', 'Additional data available when executing the business rule.'); ?></p>
        </div>
    </div>
<?php endif; ?>

    <div class="form-group buttons">
        <label class="control-label col-lg-2"></label>

        <div class="col-lg-10">
            <?php echo CHtml::submitButton(Rights::t('core', 'Save'), array('class' => 'btn btn-primary')); ?>
            <?php echo CHtml::link(Rights::t('core', 'Cancel'), Yii::app()->user->rightsReturnUrl, array('class' => 'btn btn-default')); ?>
        </div>
    </div>
<?php $this->endWidget(); ?>