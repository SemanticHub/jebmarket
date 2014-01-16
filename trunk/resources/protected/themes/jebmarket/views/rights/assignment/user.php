<h1 class="page-title"><?php echo Rights::t('core', 'Assignments for ":username"', array(
        ':username' => $model->getName()
    )); ?></h1>

<div class="assignments col-md-6 first">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
        'dataProvider' => $dataProvider,
        'template' => '{items}',
        'hideHeader' => true,
        'emptyText' => Rights::t('core', 'This user has not been assigned any items.'),
        'htmlOptions' => array('class' => 'grid-view user-assignment-table mini table-responsive'),
        'itemsCssClass' => 'table table-striped table-bordered table-hover',
        'columns' => array(
            array(
                'name' => 'name',
                'header' => Rights::t('core', 'Name'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'name-column'),
                'value' => '$data->getNameText()',
            ),
            array(
                'name' => 'type',
                'header' => Rights::t('core', 'Type'),
                'type' => 'raw',
                'htmlOptions' => array('class' => 'type-column'),
                'value' => '$data->getTypeText()',
            ),
            array(
                'header' => '&nbsp;',
                'type' => 'raw',
                'htmlOptions' => array('class' => 'actions-column'),
                'value' => '$data->getRevokeAssignmentLink()',
            ),
        )
    )); ?>

</div>

<div class="add-assignment col-md-6 last">

    <h4><?php echo Rights::t('core', 'Assign item'); ?></h4>

    <?php if ($formModel !== null): ?>

        <div class="form">

            <?php $this->renderPartial('_form', array(
                'model' => $formModel,
                'itemnameSelectOptions' => $assignSelectOptions,
            )); ?>

        </div>

    <?php else: ?>

    <p class="info"><?php echo Rights::t('core', 'No assignments available to be assigned to this user.'); ?>

        <?php endif; ?>

</div>
