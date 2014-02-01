<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['menus']['active'] = true;
?>
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-title">Manage Menus</h1>
        </div>
        <div class="col-md-6">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Create Menu Item',array('create'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
        //'label',
        array(
            'name'=>'label',
            'type'=>'raw'
        ),
        'visibility',
        array(
            'name' => 'active',
            'type' => 'html',
            'value' => '($data->active == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>"'
        ),
        array(
            'name'=> 'parent_id',
            'value'=> '($data->parent_id) ? Menu::model()->findByPk($data->parent_id)->label : ""'
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