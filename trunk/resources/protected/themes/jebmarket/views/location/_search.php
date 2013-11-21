<div class="well well-sm">
<?php
 $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
    'htmlOptions' => array('class' => 'form-inline', 'role' => 'form'),
	'method'=>'get',
)); ?>
	<div class="form-group">
		<?php echo $form->label($model,'name', array('class'=>'sr-only')); ?>
		<?php echo $form->textField($model,'name',array('placeholder' => Location::model()->getAttributeLabel('name'), 'class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo $form->label($model,'code', array('class'=>'sr-only')); ?>
		<?php echo $form->textField($model,'code',array('placeholder' => Location::model()->getAttributeLabel('code'), 'class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo $form->label($model,'dial_code', array('class'=>'sr-only')); ?>
		<?php echo $form->textField($model,'dial_code',array('placeholder' => Location::model()->getAttributeLabel('dial_code'), 'class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo $form->label($model,'next_level_name', array('class'=>'sr-only')); ?>
		<?php echo $form->textField($model,'next_level_name',array('placeholder' => Location::model()->getAttributeLabel('next_level_name'), 'class' => 'form-control')); ?>
	</div>
	<div class="form-group">
		<?php echo $form->label($model,'parent_id', array('class'=>'sr-only')); ?>
        <?php echo $form->dropDownList($model,'parent_id', CHtml::listData(Location::model()->findAll(), 'id', 'name'), array('empty'=>'--SELECT--', 'placeholder' => Location::model()->getAttributeLabel('parent_id'), 'class' => 'form-control')); ?>
	</div>
	<div class="form-group buttons">
		<?php echo CHtml::submitButton('Search', array('class' => 'btn btn-sm btn-primary')); ?>
	</div>
<?php $this->endWidget(); ?>
</div>