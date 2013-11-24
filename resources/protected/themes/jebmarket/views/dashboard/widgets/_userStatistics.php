<div class="panel-heading"><?php echo Yii::t('phrase', $widget['title']) ?>
    <?php echo CHtml::ajaxLink ('<span class="glyphicon glyphicon-refresh"></span>',
        CController::createUrl('reload'),
        array('update' => '#'.$widget['name'].' panel', 'data'=> array('id' => $widget['name'])),
        array('class' => 'panel-reload pull-right btn btn-default btn-xs')
    );?>
</div>
<?php Yii::app()->counter->refresh(); ?>
<ul class="list-group">
    <li class="list-group-item"><label><?php echo Yii::t('phrase', 'Total Number of User'); ?>: </label>
        <?php echo Yii::t('phrase', User::model()->count()); ?></li>
    <li class="list-group-item"><label><?php echo Yii::t('phrase', 'Total Verified User'); ?> : </label>
        <?php echo Yii::t('phrase', User::model()->count(array('condition' => 'activationstatus=:activationstatus', 'params' => array(':activationstatus' => '1')))); ?>
    </li>
    <li class="list-group-item"><label><?php echo Yii::t('phrase', 'Total Suspended User'); ?>: </label>
        <?php echo Yii::t('phrase', User::model()->count(array('condition' => 'status=:status', 'params' => array(':status' => '0')))); ?>
    </li>
    <li class="list-group-item"><label>Online: </label>
        <?php echo Yii::app()->counter->getOnline(); ?>
    </li>
    <li class="list-group-item"><label>Today: </label>
        <?php echo Yii::app()->counter->getToday(); ?>
    </li>
    <li class="list-group-item"><label>Yesterday: </label>
        <?php echo Yii::app()->counter->getYesterday(); ?>
    </li>
    <li class="list-group-item"><label>Total: </label>
        <?php echo Yii::app()->counter->getTotal(); ?>
    </li>
    <li class="list-group-item"><label>Maximum: </label>
        <?php echo Yii::app()->counter->getMaximal(); ?>
    </li>
    <li class="list-group-item"><label>Date for Maximum: </label>
        <?php echo date('d.m.Y', Yii::app()->counter->getMaximalTime()); ?>
    </li>
</ul>