<?php
/* @var $this MenuController */
/* @var $model Menu */
?>
    <div class="row">
        <?php if (Yii::app()->user->hasFlash('PageMenu')){ ?>
            <div class="alert alert-success" style="padding: 5px 14px;margin: 0px 15px;font-size: 15px;border: none;background: none;color: #ffffff;">
                <?php echo Yii::app()->user->getFlash('PageMenu'); ?>
            </div>
        <?php } ?>
        <div class="col-md-12">
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>