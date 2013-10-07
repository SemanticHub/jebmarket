<div class="well well-sm">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'enableAjaxValidation' => false,
        'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
    )); ?>
    <div class="form-group">
        <label class="control-label col-lg-2"><?php echo Rights::t('core', 'Add Child'); ?></label>

        <div class="col-lg-2">
            <?php echo $form->dropDownList($model, 'itemname', $itemnameSelectOptions, array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'itemname'); ?>
        </div>
        <div class="col-lg-2"><?php echo CHtml::submitButton(Rights::t('core', 'Add'), array('class' => 'btn btn-primary')); ?></div>
    </div>
    <?php $this->endWidget(); ?>
</div
