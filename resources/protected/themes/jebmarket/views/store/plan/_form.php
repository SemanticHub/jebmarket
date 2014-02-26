<div class="form-control-wrapper">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'store-plan-form',
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
		<?php echo $form->labelEx($model,'name', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'name', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'is_default', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->checkBox($model,'is_default'); ?>
		<?php echo $form->error($model,'is_default', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'description', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'description', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'thumb_width_height', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'thumb_width_height',array('size'=>10,'maxlength'=>10, 'class' => 'form-control', 'placeholder' => '400x400 in px')); ?>
		<?php echo $form->error($model,'thumb_width_height', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'image_width_height', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'image_width_height',array('size'=>10,'maxlength'=>10, 'class' => 'form-control', 'placeholder' => '600x600 in px')); ?>
		<?php echo $form->error($model,'image_width_height', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'image_max_size', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'image_max_size',array('size'=>3,'maxlength'=>3, 'class' => 'form-control', 'placeholder'=>'Max image upload size in MB')); ?>
		<?php echo $form->error($model,'image_max_size', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'image_per_product', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'image_per_product', array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'image_per_product', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'max_disk_space', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'max_disk_space', array( 'class' => 'form-control', 'placeholder' => 'Max disk space allocation in MB')); ?>
		<?php echo $form->error($model,'max_disk_space', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<!--<div class="form-group">
		<?php /*echo $form->labelEx($model,'max_bandwidth', array('class' => 'control-label col-lg-4')); */?>
        <div class="col-lg-8">
		<?php /*echo $form->textField($model,'max_bandwidth', array('class' => 'form-control')); */?>
		<?php /*echo $form->error($model,'max_bandwidth', array('class' => 'text-danger control-hint')); */?>
            </div>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'product_per_store', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'product_per_store', array('class' => 'form-control')); ?>
		<?php echo $form->error($model,'product_per_store', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

    <div class="form-group">
        <?php echo $form->labelEx($model,'transaction_fee_type', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
<!--            --><?php //echo $form->textField($model,'transaction_fee_type', array('class' => 'form-control')); ?>
            <?php echo $form->dropDownList($model, 'transaction_fee_type', Yii::app()->controller->module->transactionType, array('class' => 'form-control', 'empty' => '--SELECT--')); ?>
            <?php echo $form->error($model,'transaction_fee_type', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'transaction_fee', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		<?php echo $form->textField($model,'transaction_fee',array('size'=>20,'maxlength'=>20, 'class' => 'form-control')); ?>
		<?php echo $form->error($model,'transaction_fee', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'transaction_period', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
        <?php echo $form->dropDownList($model, 'transaction_period', Yii::app()->controller->module->transactionPeriod, array('class' => 'form-control', 'empty' => '--SELECT--')); ?>
		<?php echo $form->error($model,'transaction_period', array('class' => 'text-danger control-hint')); ?>
            </div>
	</div>

	<div class="form-group buttons">
        <label class="control-label col-lg-4"></label>
        <div class="col-lg-8">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
            </div>
	</div>

<?php $this->endWidget(); ?>
</div>