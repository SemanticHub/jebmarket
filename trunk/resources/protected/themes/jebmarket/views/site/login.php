<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle = Yii::app()->name . ' - Login';
?>
<div class="row">        
    <div class="col-md-6">
        <h1 class="page-title">Login</h1>
        <div class="note bs-callout bs-callout-info">
            <p>Please fill out the form with your login credentials.<br />
                <span class="text-danger">Fields with <span class="required">*</span> are required.</span>
            </p>
        </div>
        <div class="form-control-wrapper" style="max-width: 400px; margin-bottom: 10px; padding-top: 10px">
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'login-form',
            'enableAjaxValidation' => true,
            'enableClientValidation' => true,
            'focus' => 'input[type="text"]:first',
            'htmlOptions' => array(
                //'class' => 'form-horizontal',
                'role' => 'form'
            ),
            'clientOptions' => array(
                'inputContainer' => 'div.form-group',
                'successCssClass' => 'has-success',
                'errorCssClass' => 'has-error',
                'afterValidateAttribute' => new CJavaScriptExpression(
                        'function(form, attribute, data, hasError){
                            $("#"+attribute.inputID).parent().find("span.required").nextAll().remove();
                            if(hasError) {
                                $("<span class=\"glyphicon glyphicon-remove\"></span>").insertAfter($("#"+attribute.inputID).parent().find("span.required"));
                            } else {
                                $("<span class=\"glyphicon glyphicon-ok\"></span>").insertAfter($("#"+attribute.inputID).parent().find("span.required"));
                            }
                        }'
                    )
            )
        ));
        ?>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'username', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'username', array('class' => 'text-danger control-hint')); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
            <?php echo $form->passwordField($model, 'password', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'password', array('class' => 'text-danger control-hint')); ?>
        </div>
        <div class="form-group rememberMe">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->label($model, 'rememberMe', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'rememberMe', array('class' => 'text-danger control-hint')); ?>
        </div>
        <div class="form-group buttons">
            <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-primary')); ?>
            <?php echo CHtml::link('Forget Password?', Yii::app()->createUrl('/user/recoverpass'), array('class' => 'btn btn-default')); ?>
        </div>
        <?php $this->endWidget(); ?>
        </div>
    </div>

    <div class="col-md-6">
        <h1 class="page-title">Sign Up</h1>
        <div class="note bs-callout bs-callout-info">
            <h4>Create your own online shop Website</h4>
            <p>and start selling in minutes ...</p>
        </div>
        <div style="text-align: center">
            <a href="<?php echo Yii::app()->createUrl('/user/signup') ?>" class="btn btn-success">Sign Up for your account</a>
        </div>
    </div>            
</div>