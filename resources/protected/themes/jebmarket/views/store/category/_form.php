<h1 class="page-title form-group">
    <?php echo isset($_GET['id']) ? 'Edit' : 'New'; ?> Category
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

	<!--<div class="form-group">
		<?php /*echo $form->labelEx($model,'parent_id', array('class' => 'control-label col-lg-4')); */?>
        <div class="col-lg-8">
		    <?php /*echo $form->textField($model,'parent_id', array('class' => 'form-control')); */?>
		    <?php /*echo $form->error($model,'parent_id', array('class' => 'text-danger control-hint')); */?>
        </div>
	</div>-->

	<!--<div class="form-group">
		<?php /*echo $form->labelEx($model,'is_root', array('class' => 'control-label col-lg-4')); */?>
        <div class="col-lg-8">
		    <?php /*echo $form->textField($model,'is_root', array('class' => 'form-control')); */?>
		    <?php /*echo $form->error($model,'is_root', array('class' => 'text-danger control-hint')); */?>
        </div>
	</div>-->

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

	<!--<div class="form-group">
		<?php /*echo $form->labelEx($model,'meta_description', array('class' => 'control-label col-lg-4')); */?>
		<?php /*echo $form->textField($model,'meta_description',array('size'=>60,'maxlength'=>255)); */?>
		<?php /*echo $form->error($model,'meta_description'); */?>
	</div>

	<div class="form-group">
		<?php /*echo $form->labelEx($model,'meta_keyword', array('class' => 'control-label col-lg-4')); */?>
		<?php /*echo $form->textField($model,'meta_keyword',array('size'=>60,'maxlength'=>255)); */?>
		<?php /*echo $form->error($model,'meta_keyword'); */?>
	</div>-->

	<!--<div class="form-group">
		<?php /*echo $form->labelEx($model,'image', array('class' => 'control-label col-lg-4')); */?>
		<?php /*echo $form->textField($model,'image',array('size'=>60,'maxlength'=>255)); */?>
		<?php /*echo $form->error($model,'image'); */?>
	</div>-->

	<div class="form-group">
		<?php echo $form->labelEx($model,'shop_default', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		    <?php echo $form->checkBox($model,'shop_default', array('class' => '')); ?>
		    <?php echo $form->error($model,'shop_default', array('class' => 'text-danger control-hint')); ?>
        </div>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'status', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
		    <?php // echo $form->textField($model,'status', array('class' => 'form-control')); ?>
            <?php echo $form->radioButtonList($model,'status', array('0'=> 'Inactive', '1'=> 'Active') ,array('separator'=>' ', 'class'=>'publish_option')  ); ?>
		    <?php echo $form->error($model,'status', array('class' => 'text-danger control-hint')); ?>
        </div>
	</div>

	<!--<div class="form-group">
		<?php /*echo $form->labelEx($model,'visibility', array('class' => 'control-label col-lg-4')); */?>
        <div class="col-lg-8">
		    <?php /*echo $form->textField($model,'visibility', array('class' => 'form-control')); */?>
		    <?php /*echo $form->error($model,'visibility', array('class' => 'text-danger control-hint')); */?>
        </div>
	</div>-->

	<!--<div class="form-group buttons">
		<?php /*echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); */?>
	</div>-->

<?php $this->endWidget(); ?>
</div>