<div id="permissions">
    <h1 class="page-title"><?php echo Rights::t('core', 'Permissions'); ?></h1>
    <div class="note bs-callout bs-callout-info">
        <p>
            <?php echo Rights::t('core', 'Here you can view and manage the permissions assigned to each role.'); ?>
        </p>
    </div>
    <?php echo CHtml::link(Rights::t('core', 'Generate controller actions'), array('authItem/generate'), array(
        'class' => 'generator-link btn btn-warning pull-right', 'style' => 'margin-top: -130px'
    )); ?>
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'itemsCssClass' => 'table table-striped table-hover',
        'summaryCssClass' => 'label label-info',
        'htmlOptions' => array('class' => 'table-responsive'),
        'pagerCssClass' => 'page-nav',
        'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
        'dataProvider' => $dataProvider,
        'template' => '{items}',
        'emptyText' => Rights::t('core', 'No authorization items found.'),
        'htmlOptions' => array('class' => 'grid-view permission-table'),
        'columns' => $columns,
    )); ?>
    <script type="text/javascript">
        /**
         * Attach the tooltip to the inherited items.
         */
        jQuery('.inherited-item').rightsTooltip({
            title: '<?php echo Rights::t('core', 'Source'); ?>: '
        });
        /**
         * Hover functionality for rights' tables.
         */
        $('#rights tbody tr').hover(function () {
            $(this).addClass('hover'); // On mouse over
        }, function () {
            $(this).removeClass('hover'); // On mouse out
        });
    </script>
</div>