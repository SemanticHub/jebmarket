<h1 class="page-title"><?php echo Yii::t('phrase', 'Sign Up') ?></h1>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="note bs-callout bs-callout-info">
            <h4>Signing up is fast and easy</h4>
            <p>
                You are signing up for the free plan, you can cancel or update at any time. </br>
                <span class="text-danger">Fields with <span class="required">*</span> are required.</span>
            </p>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="form-control-wrapper" style="max-width: 450px; margin-bottom: 10px; padding-top: 10px">
        <?php $this->renderPartial('_signup_form', array('model' => $model)); ?>
        <?php
       // if (!Yii::app()->request->isPostRequest)
            Yii::app()->clientScript->registerScript(
                'initCaptcha',
                '$("#yw0_button").trigger("click");',
                CClientScript::POS_READY
            );
        ?>
    </div>
</div>