<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['pages']['active'] = true;
?>
<div class="row">
    <div class="col-md-6">
        <h1 class="page-title">Manage Pages</h1>
    </div>
    <div class="col-md-6">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('Create Page',array('create'), array('class'=>'btn btn-success')); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'pages-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
    'filter' => $model,
    'columns' => array(
        'title',
        'slug',
        'meta_keywords',
        array(
            'name' => 'active',
            'type' => 'html',
            'htmlOptions' => array('style' => 'width:30px; text-align:center'),
            'value' => '($data->active == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"'
        ),
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{view}{delete}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('phrase', 'Edit'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-warning btn-xs')
                ),
                'delete' => array(
                    'label' => Yii::t('phrase', 'Delete'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-danger btn-xs')
                ),
                'view' => array(
                    'label' => Yii::t('phrase', 'View'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-info btn-xs')
                )
            )
        ),
    ),
)); ?>