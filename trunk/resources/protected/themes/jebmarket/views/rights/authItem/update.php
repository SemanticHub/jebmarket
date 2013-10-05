<div id="updatedAuthItem">
	<h1 class="page-title"><?php echo Rights::t('core', 'Edit :name', array(
		':name'=>Rights::getAuthItemTypeName($model->type),
		':type'=>Rights::getAuthItemTypeName($model->type),
	)); ?></h1>

	<?php $this->renderPartial('_form', array('model'=>$formModel)); ?>

	<div class="relations span-11 last">

		<h3><?php echo Rights::t('core', 'Relations'); ?></h3>

		<?php if( $model->name!==Rights::module()->superuserName ): ?>

			<fieldset class="parents">

				<legend><h4><?php echo Rights::t('core', 'Parents'); ?></h4></legend>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'dataProvider'=>$parentDataProvider,
					'template'=>'{items}',
					'hideHeader'=>true,
					'emptyText'=>Rights::t('core', 'This item has no parents.'),
					'htmlOptions'=>array('class'=>'grid-view parent-table mini'),
					'columns'=>array(
    					array(
    						'name'=>'name',
    						'header'=>Rights::t('core', 'Name'),
    						'type'=>'raw',
    						'htmlOptions'=>array('class'=>'name-column'),
    						'value'=>'$data->getNameLink()',
    					),
    					array(
    						'name'=>'type',
    						'header'=>Rights::t('core', 'Type'),
    						'type'=>'raw',
    						'htmlOptions'=>array('class'=>'type-column'),
    						'value'=>'$data->getTypeText()',
    					),
    					array(
    						'header'=>'&nbsp;',
    						'type'=>'raw',
    						'htmlOptions'=>array('class'=>'actions-column'),
    						'value'=>'',
    					),
					)
				)); ?>

			</fieldset>

			<fieldset class="children">

				<legend><h4><?php echo Rights::t('core', 'Children'); ?></h4></legend>

				<?php $this->widget('zii.widgets.grid.CGridView', array(
					'dataProvider'=>$childDataProvider,
					'template'=>'{items}',
					'hideHeader'=>true,
					'emptyText'=>Rights::t('core', 'This item has no children.'),
					'htmlOptions'=>array('class'=>'grid-view parent-table mini'),
					'columns'=>array(
    					array(
    						'name'=>'name',
    						'header'=>Rights::t('core', 'Name'),
    						'type'=>'raw',
    						'htmlOptions'=>array('class'=>'name-column'),
    						'value'=>'$data->getNameLink()',
    					),
    					array(
    						'name'=>'type',
    						'header'=>Rights::t('core', 'Type'),
    						'type'=>'raw',
    						'htmlOptions'=>array('class'=>'type-column'),
    						'value'=>'$data->getTypeText()',
    					),
    					array(
    						'header'=>'&nbsp;',
    						'type'=>'raw',
    						'htmlOptions'=>array('class'=>'actions-column'),
    						'value'=>'$data->getRemoveChildLink()',
    					),
					)
				)); ?>

			</fieldset>

			<div class="addChild">
				<!--<h5><?php /*echo Rights::t('core', 'Add Child'); */?></h5>-->
				<?php if( $childFormModel!==null ): ?>
					<?php $this->renderPartial('_childForm', array(
						'model'=>$childFormModel,
						'itemnameSelectOptions'=>$childSelectOptions,
					)); ?>
				<?php else: ?>
					<p class="info"><?php echo Rights::t('core', 'No children available to be added to this item.'); ?>
				<?php endif; ?>
			</div>

		<?php else: ?>
        <div class="note bs-callout bs-callout-info">
			<p class="info">
				<?php echo Rights::t('core', 'No relations need to be set for the superuser role.'); ?>
				<?php echo Rights::t('core', 'Super users are always granted access implicitly.'); ?>
			</p>
            </div>
		<?php endif; ?>

	</div>

</div>