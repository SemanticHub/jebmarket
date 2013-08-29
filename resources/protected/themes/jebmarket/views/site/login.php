<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle = Yii::app()->name . ' - Login';
?>
<div class="row">        
    <div class="col-md-6">
        <h1 class="page-title">Login</h1>    
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array('role' => 'form')
        ));
        ?>
        <div class="note bs-callout bs-callout-info">
            <p>Please fill out the following form with your login credentials: username or email both will work</p>
        </div>
        <div class="note bs-callout bs-callout-warning">
            <p>Fields with <span class="required">*</span> are required.</p>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>

        <div class="form-group rememberMe">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->label($model, 'rememberMe', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>

        <div class="form-group buttons">
            <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>

    <div class="col-md-6">
        <h1 class="page-title">Sign Up</h1>
        <div class="note bs-callout bs-callout-info">
            <h4>Create your own online shop Website</h4>
            <p>and start selling in minutes ...</p>
        </div>
        <a href="<?php echo Yii::app()->createUrl('/user/signup') ?>" class="btn btn-block btn-success btn-lg">Sign Up for your account</a>
    </div>            
</div>

