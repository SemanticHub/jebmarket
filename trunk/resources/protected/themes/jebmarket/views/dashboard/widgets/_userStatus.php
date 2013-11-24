<div class="panel-heading"><?php echo Yii::t('phrase', $widget['title']) ?>
    <?php echo CHtml::ajaxLink ('<span class="glyphicon glyphicon-refresh"></span>',
        CController::createUrl('reload'),
        array('update' => '#'.$widget['name'].' panel', 'data'=> array('id' => $widget['name'])),
        array('class' => 'panel-reload pull-right btn btn-default btn-xs')
    );?>
</div>
<!--<div class="panel-body">-->
    <?php
        $user = User::model()->findByPk(Yii::app()->user->id);
    ?>
    <ul class="list-group">
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('joined'));  ?>: </label> <?php echo Yii::t('phrase', Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($user->getAttribute('joined'), 'yyyy-MM-dd hh:mm:ss'),'medium','medium')); ?></li>
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('last_login'));  ?>: </label> <?php echo Yii::t('phrase', Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($user->getAttribute('last_login'), 'yyyy-MM-dd hh:mm:ss'),'medium','medium')); ?></li>
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('activationstatus'));  ?>: </label> <?php echo Yii::t('phrase', ($user->activationstatus == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"); ?></li>
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('status'));  ?>: </label> <?php echo Yii::t('phrase', ($user->status == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"); ?></li>
    </ul>
<!--</div>-->
