<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="well well-sm">

    <?php $form = $this->beginWidget('CActiveForm', array(
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
        'htmlOptions' => array('class' => 'form-inline', 'role' => 'form')
    )); ?>

    <div class="form-group">
        <?php echo $form->label($model, 'id'); ?>
        <?php echo $form->textField($model, 'id', array('class' => 'form-control')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array( 'class' => 'form-control')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array( 'class' => 'form-control')); ?>
    </div>


    <div class="form-group">
        <?php echo $form->label($model, 'joined'); ?>
        <?php echo $form->textField($model, 'joined', array('class' => 'form-control')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'activationstatus'); ?>
        <?php echo $form->textField($model, 'activationstatus', array('size' => 1, 'maxlength' => 1, 'class' => 'form-control')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'last_login'); ?>
        <?php echo $form->textField($model, 'last_login', array('class' => 'form-control')); ?>
    </div>

    <div class="form-group">
        <?php echo $form->label($model, 'timezone'); ?>
        <?php echo $form->textField($model, 'timezone', array('class' => 'form-control')); ?>
    </div>

    <div class="form-group buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>