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
                'role' => 'form'
            ),
            'clientOptions' => array(
                'inputContainer' => 'div.form-group',
                'successCssClass' => 'has-success',
                'errorCssClass' => 'has-error',
                'afterValidateAttribute' => new CJavaScriptExpression(
                        'function(form, attribute, data, hasError){
                            $("#"+attribute.inputID).parent().find("span.required").nextAll().remove();
                            if(hasError == true) {
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
            <a href="#" data-toggle="modal" data-target="#member_plan" class="btn btn-lg btn-success"> Start Your Online Business Now </a>
        </div>
    </div>            
</div>
<!-- Modal Price box -->
<div class="modal fade" id="member_plan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><b>Choose Your Online Business Membership Plan</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 price_box_left">
                        <div class="price_box1">
                            <h4><sup>$</sup>20<span>/month</span></h4>
                            <h5>Basic</h5>
                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Basic'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Your Free Trial </a></h6>
                            <ul>
                                <li>Unlimited bandwidth</li>
                                <li>Unlimited products</li>
                                <li>1 GB File storage</li>
                                <li>2.0% Transaction fee</li>
                                <li>Discount code engine</li>
                                <li>24x7 Phone support</li>
                                <li><s>Gift cards</s></li>
                                <li><s>Abandoned cart recovery</s></li>
                                <li><s>Professional reports</s></li>
                                <li><s>Advanced report builder</s></li>
                                <li><s>Real-time carrier shipping</s></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 price_box_middle">
                        <div class="price_box3">
                            <p>Most Popular</p>
                            <h4><sup>$</sup>70<span>/month</span></h4>
                            <h5>Premium</h5>
                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Premium'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Your Free Trial </a></h6>
                            <ul>
                                <li>Unlimited bandwidth</li>
                                <li>Unlimited products</li>
                                <li><span>5 GB</span> File storage</li>
                                <li><span>1.0%</span> Transaction fee</li>
                                <li>Discount code engine</li>
                                <li>24x7 Phone support</li>
                                <li>Gift cards</li>
                                <li>Abandoned cart recovery</li>
                                <li>Professional reports</li>
                                <li><s>Advanced report builder</s></li>
                                <li><s>Real-time carrier shipping</s></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 price_box_right">
                        <div class="price_box2">
                            <h4><sup>$</sup>170<span>/month</span></h4>
                            <h5>Executive</h5>
                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Executive'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Your Free Trial </a></h6>
                            <ul>
                                <li>Unlimited bandwidth</li>
                                <li>Unlimited products</li>
                                <li><span>Unlimited</span> File storage</li>
                                <li><span>No</span> Transaction fee</li>
                                <li>Discount code engine</li>
                                <li>24x7 Phone support</li>
                                <li>Gift cards</li>
                                <li>Abandoned cart recovery</li>
                                <li>Professional reports</li>
                                <li>Advanced report builder</li>
                                <li>Real-time carrier shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup_box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header signup_step_head">
                <ul class="list-inline signup_step">
                    <li class="active">
                        <p class="glyphicon glyphicon-th blue"></p>
                        <p class="step_name">1. Email Registration</p>
                    </li>
                    <li>
                        <p class="glyphicon glyphicon-briefcase"></p>
                        <p class="step_name">2. Initialize Business</p>
                    </li>
                    <li>
                        <p class="glyphicon glyphicon-saved"></p>
                        <p class="step_name">3. Select Template</p>
                    </li>
                </ul>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup_box2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header signup_step_head">
                <ul class="list-inline signup_step">
                    <li>
                        <p class="glyphicon glyphicon-th blue"></p>
                        <p class="step_name">1. Email Registration</p>
                    </li>
                    <li class="active">
                        <p class="glyphicon glyphicon-briefcase"></p>
                        <p class="step_name">2. Initialize Business</p>
                    </li>
                    <li>
                        <p class="glyphicon glyphicon-saved"></p>
                        <p class="step_name">3. Select Template</p>
                    </li>
                </ul>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup_box3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header signup_step_head">
                <ul class="list-inline signup_step">
                    <li>
                        <p class="glyphicon glyphicon-th blue"></p>
                        <p class="step_name">1. Email Registration</p>
                    </li>
                    <li>
                        <p class="glyphicon glyphicon-briefcase"></p>
                        <p class="step_name">2. Initialize Business</p>
                    </li>
                    <li class="active">
                        <p class="glyphicon glyphicon-saved"></p>
                        <p class="step_name">3. Select Template</p>
                    </li>
                </ul>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $('#myCarousel').carousel();
        $(".start_now").click(function() {
            $('#member_plan').modal('hide');
        });
    });
</script>