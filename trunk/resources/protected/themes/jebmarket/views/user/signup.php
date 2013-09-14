<h1 class="page-title"><?php echo Yii::t('phrase', 'Sign Up')?></h1>

<div class="note bs-callout bs-callout-info">
    <h4>Signing up is fast and easy</h4>
    <p>You are signing up for the free plan, you can cancel or update at any time.</p>
</div>

<?php $this->renderPartial('_signup_form', array('model'=>$model)); ?>