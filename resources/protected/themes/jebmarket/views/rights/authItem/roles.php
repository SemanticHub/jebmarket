<div id="roles">
    <h1 class="page-title"><?php echo Rights::t('core', 'Roles'); ?></h1>

    <div class="note bs-callout bs-callout-info">
        <p>
             <?php echo Rights::t('core', 'A role is group of permissions to perform a variety of tasks and operations.'); ?>
        </p>
    </div>
    <?php echo CHtml::link(Rights::t('core', 'New Role'), array('authItem/create', 'type' => CAuthItem::TYPE_ROLE), array(
        'class' => 'btn btn-success',
    )); ?>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-hover',
        'summaryCssClass' => 'label label-info',
        'htmlOptions' => array('class' => 'table-responsive'),
        'pagerCssClass' => 'page-nav',
        'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
        'dataProvider' => $dataProvider,
        'template' => '{items}',
        'emptyText' => Rights::t('core', 'No roles found.'),
        'columns' => array(
            array(
                'name' => 'name',
                'header' => Rights::t('core', 'Name'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'name-column'),
                'value' => '$data->getGridNameLink()',
            ),
            array(
                'name' => 'description',
                'header' => Rights::t('core', 'Description'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'description-column'),
            ),
            array(
                'name' => 'bizRule',
                'header' => Rights::t('core', 'Business rule'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'bizrule-column'),
                'visible' => Rights::module()->enableBizRule === true,
            ),
            array(
                'name' => 'data',
                'header' => Rights::t('core', 'Data'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'data-column'),
                'visible' => Rights::module()->enableBizRuleData === true,
            ),
            array(
                'header' => '&nbsp;',
                'type' => 'raw',
                'htmlOptions' => array('class' => 'actions-column'),
                'value' => '$data->getDeleteRoleLink()',
            ),
        )
    )); ?>
</div>