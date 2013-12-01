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
    <?php
        $user = User::model()->findByPk(Yii::app()->user->id);
    ?>
    <ul class="list-group">
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('joined'));  ?>: </label>
            <span class="badge"><?php echo Yii::t('phrase', Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($user->getAttribute('joined'), 'yyyy-MM-dd hh:mm:ss'),'medium','medium')); ?></span>
        </li>
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('last_login'));  ?>: </label>
            <span class="badge"><?php echo Yii::t('phrase', Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($user->getAttribute('last_login'), 'yyyy-MM-dd hh:mm:ss'),'medium','medium')); ?></span>
        </li>
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('activationstatus'));  ?>: </label>
            <span class="badge"><?php echo Yii::t('phrase', ($user->activationstatus == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"); ?></span>
        </li>
        <li class="list-group-item"><label><?php echo Yii::t('phrase', $user->getAttributeLabel('status'));  ?>: </label>
            <span class="badge"><?php echo Yii::t('phrase', ($user->status == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"); ?></span>
        </li>
    </ul>
</div>
</div>