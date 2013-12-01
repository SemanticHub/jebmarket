<div class="panel-heading"><?php echo Yii::t('phrase', $widget['title']) ?>
    <div class="btn-group pull-right">
        <?php echo CHtml::ajaxLink ('<span class="glyphicon glyphicon-refresh"></span>',
            CController::createUrl('reload'),
            array('update' => '#'.$widget['name'].' panel', 'data'=> array('id' => $widget['name'])),
            array('class' => 'panel-reload btn btn-default btn-xs')
        );?>
        <a class="btn btn-default btn-xs" data-toggle="collapse" data-target="#<?php echo $widget['name'].'-collapse' ?>">
            <span class="glyphicon glyphicon-sort"></span>
        </a>
    </div>
</div>
<div id="<?php echo $widget['name'].'-collapse' ?>" class="collapse in">
<div class="panel-body-wrapper">
    Panel content
</div>
</div>
