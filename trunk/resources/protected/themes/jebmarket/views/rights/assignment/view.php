<?php
$this->menu = Yii::app()->params['usermenu'];
?>
	<h1 class="page-title"><?php echo Rights::t('core', 'Assignments'); ?></h1>
    <div class="note bs-callout bs-callout-info">
	<p>
		<?php echo Rights::t('core', 'A summary view of permissions has been assigned to each user.'); ?>
	</p>
</div>
	<?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-hover',
        'summaryCssClass' => 'label label-info',
        'htmlOptions' => array('class' => 'table-responsive'),
        'pagerCssClass' => 'page-nav',
        'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	    'dataProvider'=>$dataProvider,
	    'template'=>"{items}\n{pager}",
	    'emptyText'=>Rights::t('core', 'No users found.'),
	    'htmlOptions'=>array('class'=>'grid-view assignment-table'),
	    'columns'=>array(
    		array(
    			'name'=>'name',
    			'header'=>Rights::t('core', 'User'),
    			'type'=>'raw',
    			'htmlOptions'=>array('class'=>'name-column'),
    			'value'=>'$data->getAssignmentNameLink()',
    		),
    		array(
    			'name'=>'assignments',
    			'header'=>Rights::t('core', 'Roles'),
    			'type'=>'raw',
    			'htmlOptions'=>array('class'=>'role-column'),
    			'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_ROLE)',
    		),
			/*array(
    			'name'=>'assignments',
    			'header'=>Rights::t('core', 'Tasks'),
    			'type'=>'raw',
    			'htmlOptions'=>array('class'=>'task-column'),
    			'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_TASK)',
    		),*/
			array(
    			'name'=>'assignments',
    			'header'=>Rights::t('core', 'Operations'),
    			'type'=>'raw',
    			'htmlOptions'=>array('class'=>'operation-column'),
    			'value'=>'$data->getAssignmentsText(CAuthItem::TYPE_OPERATION)',
    		),
	    )
	)); ?>