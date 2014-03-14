<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['settings']['active'] = true;
?>
<div class="row">
        <h1 class="page-title">Website Settings</h1>
</div>
<?php if (Yii::app()->user->hasFlash('success')){ ?>
<div class="alert alert-success" style="margin: 0 0 20px 0;">
    <?php echo Yii::app()->user->getFlash('success'); ?>
</div>
<?php } ?>
<div class="website_settings">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>