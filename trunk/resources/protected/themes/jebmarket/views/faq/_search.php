<?php
/* @var $this FaqController */
/* @var $model Faq */
/* @var $form CActiveForm */
?>
<div class="well well-sm" style="margin-top: 20px">
<?php
$form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
    'htmlOptions' => array('class' => 'form-inline', 'role' => 'form')
        ));
?>
<div class="form-group">
    <?php echo $form->label($model, 'faq'); ?>
    <?php echo $form->textField($model, 'faq', array('size' => 30)); ?>
</div>
<div class="form-group">
    <?php echo $form->label($model, 'answer'); ?>
    <?php echo $form->textField($model, 'answer', array('size' => 30)); ?>
</div>
<div class="form-group">
    <?php echo $form->label($model, 'tag'); ?>
    <?php echo $form->textField($model, 'tag', array('size' => 30, 'maxlength' => 45)); ?>
</div>
<div class="form-group buttons">
    <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-sm btn-primary')); ?>
</div>
<?php $this->endWidget(); ?>
</div>