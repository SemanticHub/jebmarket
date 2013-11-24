<div class="panel-heading"><?php echo Yii::t('phrase', $widget['title']) ?>
    <?php echo CHtml::ajaxLink ('<span class="glyphicon glyphicon-refresh"></span>',
        CController::createUrl('reload'),
        array('update' => '#'.$widget['name'].' panel', 'data'=> array('id' => $widget['name'])),
        array('class' => 'panel-reload pull-right btn btn-default btn-xs')
    );?>
</div>
<div class="panel-body">
    Panel content
</div>
