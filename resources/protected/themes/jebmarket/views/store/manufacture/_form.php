<h1 class="page-title form-group">
    New Manufacture
</h1>
<div class="form-control-wrapper">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'model-form',
    'enableAjaxValidation' => true,
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
		<?php echo $form->labelEx($model,'description', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		    <?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		    <?php echo $form->error($model,'description', array('class' => 'text-danger control-hint')); ?>
        </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'logo', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		    <?php echo $form->textField($model,'logo',array('size'=>45,'maxlength'=>45, 'class' => 'form-control')); ?>
		    <?php echo $form->error($model,'logo', array('class' => 'text-danger control-hint')); ?>
        </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'website', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		    <?php echo $form->textField($model,'website',array('size'=>45,'maxlength'=>45, 'class' => 'form-control')); ?>
		    <?php echo $form->error($model,'website', array('class' => 'text-danger control-hint')); ?>
        </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'tag', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		    <?php echo $form->textField($model,'tag',array('size'=>60,'maxlength'=>255, 'class' => 'form-control')); ?>
		    <?php echo $form->error($model,'tag', array('class' => 'text-danger control-hint')); ?>
        </div>
	</div>

	<!--<div class="form-group buttons">
		<?php /*echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); */?>
	</div>-->

<?php $this->endWidget(); ?>

</div><!-- form -->