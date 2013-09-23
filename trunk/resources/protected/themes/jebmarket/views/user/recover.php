<?php
/* @var $this UserController */
/* @var $model Password */
/* @var $form CActiveForm  */
$this->pageTitle = Yii::app()->name . ' - Recover Password';
$this->layout = 'column1';
?>
<div class="row">        
    <div class="col-md-6">
        <h1 class="page-title">Recover Lost Password</h1>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'password-recover-form',
            'enableClientValidation' => true,
            'enableAjaxValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array('role' => 'form')
        ));
        ?>
        <div class="note bs-callout bs-callout-info">
            <h4>Type your JebMarket Username or Email</h4>
            <p>& follow the email instructions to recover your lost password.</p>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username', array('class' => 'text-danger control-hint')); ?>
        </div>
        <div class="form-group buttons">
            <?php echo CHtml::submitButton('Recover', array('class' => 'btn btn-primary')); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
    <div class="col-md-6">
        <h1 class="page-title">New at JebMarket ?</h1>
        <div class="note bs-callout bs-callout-info">
            <h4>Create your own online shop Website</h4>
            <p>and start selling in minutes ...</p>
        </div>
        <a href="<?php echo Yii::app()->createUrl('/user/signup') ?>" class="btn btn-block btn-success btn-lg">Sign Up for your account</a>
    </div>
</div>