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
<?php Yii::app()->counter->refresh(); ?>
<ul class="list-group">
    <li class="list-group-item"><label><?php echo Yii::t('phrase', 'Total Number of User'); ?>: </label>
        <span class="badge"><?php echo Yii::t('phrase', User::model()->count()); ?></span>
    </li>
    <li class="list-group-item"><label><?php echo Yii::t('phrase', 'Total Verified User'); ?> : </label>
        <span class="badge"><?php echo Yii::t('phrase', User::model()->count(array('condition' => 'activationstatus=:activationstatus', 'params' => array(':activationstatus' => '1')))); ?></span>
    </li>
    <li class="list-group-item"><label><?php echo Yii::t('phrase', 'Total Suspended User'); ?>: </label>
        <span class="badge"><?php echo Yii::t('phrase', User::model()->count(array('condition' => 'status=:status', 'params' => array(':status' => '0')))); ?></span>
    </li>
    <li class="list-group-item"><label>Online: </label>
        <span class="badge"><?php echo Yii::app()->counter->getOnline(); ?></span>
    </li>
    <li class="list-group-item"><label>Today: </label>
        <span class="badge"><?php echo Yii::app()->counter->getToday(); ?></span>
    </li>
    <li class="list-group-item"><label>Yesterday: </label>
        <span class="badge"><?php echo Yii::app()->counter->getYesterday(); ?></span>
    </li>
    <li class="list-group-item"><label>Total: </label>
        <span class="badge"><?php echo Yii::app()->counter->getTotal(); ?></span>
    </li>
    <li class="list-group-item"><label>Maximum: </label>
        <span class="badge"><?php echo Yii::app()->counter->getMaximal(); ?></span>
    </li>
    <li class="list-group-item"><label>Date for Maximum: </label>
        <span class="badge"><?php echo date('d.m.Y', Yii::app()->counter->getMaximalTime()); ?></span>
    </li>
</ul>
</div>
</div>