<?php
/* @var $this MediaController */
/* @var $model Media */
/* @var $form CActiveForm */
?>

<div class="row blog_form">
    <div class="col-md-6">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'media-form',
	'enableAjaxValidation'=>true,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    )
)); ?>

	<?php echo $form->errorSummary($model); ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'caption', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'caption', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'caption', array('class' => 'text-danger control-hint')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'alternative_text', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'alternative_text', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'alternative_text', array('class' => 'text-danger control-hint')); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'description', array('class' => 'control-label')); ?>
            <?php echo $form->textArea($model, 'description', array('rows'=>6, 'cols'=>50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'description', array('class' => 'text-danger control-hint')); ?>
        </div>

        <img width="400px" src="<?php echo Yii::app()->getBaseUrl(true).'/'.Yii::app()->params["uploadPath"].Yii::app()->user->name.'/'.$model->url; ?>" />

        <div class="form-group buttons">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-success')); ?>
        </div>

<?php $this->endWidget(); ?>
    </div>
</div><!-- form -->