<div class="well well-sm">
<?php $form=$this->beginWidget('CActiveForm', array(
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
)); ?>
	<div class="form-group" style="margin-bottom: 0">
        <div class="col-lg-2">
		<?php echo $form->dropDownList($model, 'itemname', $itemnameSelectOptions, array('class' => 'form-control')); ?>
		<?php echo $form->error($model, 'itemname'); ?>
        </div>
        <div class="col-lg-2">
            <?php echo CHtml::submitButton(Rights::t('core', 'Assign'), array('class' => 'btn btn-primary')); ?>
        </div>
	</div>
<?php $this->endWidget(); ?>
</div>