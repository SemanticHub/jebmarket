<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->menu = array(
    array('label' => 'Create Menu Item', 'url' => array('create')),
);
?>

<h1 class="page-title">Menus</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'menu-grid',
    'itemsCssClass' => 'table',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'odr',
        'label',
        //'url',
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
        ),
    ),
));
?>
