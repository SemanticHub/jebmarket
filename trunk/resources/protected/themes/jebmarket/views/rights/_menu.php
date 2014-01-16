<?php
$this->widget('zii.widgets.CMenu', array(
    'htmlOptions' => array('class' => 'nav nav-tabs'),
    'activeCssClass'=>'active',
    'activateParents'=>true,
	'items'=>array(
		array(
			'label'=>Rights::t('core', 'Assignments'),
			'url'=>array('assignment/view'),
			'itemOptions'=>array('class'=>'item-assignments'),
            'active'=>Yii::app()->controller->action->id=='user' || Yii::app()->controller->action->id=='view',
		),
		array(
			'label'=>Rights::t('core', 'Permissions'),
			'url'=>array('authItem/permissions'),
			'itemOptions'=>array('class'=>'item-permissions'),
            'active'=>Yii::app()->controller->action->id=='permissions',
		),
		array(
			'label'=>Rights::t('core', 'Roles'),
			'url'=>array('authItem/roles'),
			'itemOptions'=>array('class'=>'item-roles'),
            'active'=>Yii::app()->controller->action->id=='roles',
		),
//		array(
//			'label'=>Rights::t('core', 'Tasks'),
//			'url'=>array('authItem/tasks'),
//			'itemOptions'=>array('class'=>'item-tasks'),
//            'active'=>Yii::app()->controller->action->id=='tasks',
//		),
		array(
			'label'=>Rights::t('core', 'Operations'),
			'url'=>array('authItem/operations'),
			'itemOptions'=>array('class'=>'item-operations'),
            'active'=>Yii::app()->controller->action->id=='operations',
		),
	)
));	?>