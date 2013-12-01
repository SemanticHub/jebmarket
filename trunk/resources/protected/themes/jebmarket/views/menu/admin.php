<?php
$this->menu = array(
    array('label' => 'Create Menu Item', 'url' => array('create')),
);
?>
<h1 class="page-title">Menus</h1>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'menu-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right top-21',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager'=>array('header'=>'','selectedPageCssClass'=>'active','htmlOptions'=>array('class'=>'pagination')),
    'filter' => $model,
    'columns' => array(
        array(
            'name'=>'odr',
            'htmlOptions'=>array('style'=>'width:30px; text-align: right')
        ),
        'label',
        'visibility',
        array(
            'name' => 'active',
            'type' => 'html',
            'value' => '($data->active == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"'
        ),
        array(
            'name'=> 'parent_id',
            'value'=> 'Menu::model()->findByPk($data->parent_id)->label'
        ),
        'tag',
        array(
            'class' => 'CButtonColumn',
            'template'=>'{update}{view}{delete}',
            'buttons' => array(
                'update' => array(
                    'label'=> Yii::t('phrase','Edit'),
                    'imageUrl'=> false,
                    'options'=>array('class'=>'btn btn-warning btn-xs')
                ),
                'delete' => array(
                    'label'=> Yii::t('phrase','Delete'),
                    'imageUrl'=> false,
                    'options'=>array('class'=>'btn btn-danger btn-xs')
                ),
                'view' => array(
                    'label'=> Yii::t('phrase','View'),
                    'imageUrl'=> false,
                    'options'=>array('class'=>'btn btn-info btn-xs')
                )
            )
        ),
    ),
));
?>