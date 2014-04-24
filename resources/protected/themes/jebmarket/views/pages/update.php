<?php
/* @var $this PagesController */
/* @var $model Pages */
?>
<div class="row">
    <?php if (Yii::app()->user->hasFlash('PageMenu')){ ?>
        <div class="alert alert-success" style="padding: 5px 10px;margin: -15px 0 5px 0;font-size: 15px;background: #000;border: none;border-radius: 0;color: white;">
            <?php echo Yii::app()->user->getFlash('PageMenu'); ?>
        </div>
    <?php } ?>
    <div class="col-md-12">
        <div class="trd_page_menu" style="margin: 0">
            <p onclick="send();" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</p>
        </div>
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>