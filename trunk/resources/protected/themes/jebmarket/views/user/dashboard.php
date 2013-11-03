<?php
/* @var $this UserController */
/* @var $model User */
$this->menu=Yii::app()->params['usermenu'];
$this->menu['dashboard']['active']=true;
?>
<h1 class="page-title">Dashboard</h1>
<div class="row">
<?php
$this->widget('zii.widgets.jui.CJuiSortable',array(
    'tagName' => 'div',
    'itemTemplate' => '<div class="col-sm-4" id="{id}"><div class="panel panel-default"><div class="panel-heading">Panel heading without title</div><div class="panel-body">{content}</div></div></div>',
    'items'=>array(
        'id1'=>'Item 1',
        'id2'=>'Item 2',
        'id3'=>'Item 3',
        'id4'=>'Item 4',
        'id5'=>'Item 6',
    ),
    'options'=>array(
        'delay'=>'300',
    ),
));
?>
</div>