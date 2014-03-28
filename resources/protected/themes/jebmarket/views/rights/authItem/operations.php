<?php
$this->menu = Yii::app()->params['usermenu'];
?>
<div id="operations">
    <h1 class="page-title"><?php echo Rights::t('core', 'Operations'); ?></h1>

    <div class="note bs-callout bs-callout-info">
        <p>
            <?php echo Rights::t('core', 'An operation is a permission to perform a single operation, for example accessing a certain controller action.'); ?>
        </p>
    </div>

    <?php echo CHtml::link(Rights::t('core', 'Create a operation'), array('authItem/create', 'type' => CAuthItem::TYPE_OPERATION), array(
        'class' => 'add-operation-link btn btn-success pull-right', 'style' => 'margin-top: -130px'
    )); ?>

    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-hover',
        'summaryCssClass' => 'label label-info',
        'htmlOptions' => array('class' => 'table-responsive'),
        'pagerCssClass' => 'page-nav',
        'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
        'dataProvider' => $dataProvider,
        'template' => '{items}',
        'emptyText' => Rights::t('core', 'No operations found.'),
        'htmlOptions' => array('class' => 'grid-view operation-table sortable-table'),
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
                'value' => '$data->getDeleteOperationLink()',
            ),
        )
    )); ?>
</div>