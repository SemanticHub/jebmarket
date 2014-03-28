<?php
/* @var $this PagesController */
/* @var $model Pages */
$this->menu = Yii::app()->params['usermenu'];
$this->menu['pages']['active'] = true;
?>
<div class="row">
    <div class="col-md-6">
        <?php if (Yii::app()->user->hasFlash('PageMenu')){ ?>
            <div class="alert alert-success">
                <?php echo Yii::app()->user->getFlash('PageMenu'); ?>
            </div>
        <?php } ?>
    </div>
    <div class="col-md-6">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('View Page',array('#',), array('class'=>'btn btn-success btn-xs')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Page Settings',array('#'), array('class'=>'btn btn-success btn-xs')); ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
</div>