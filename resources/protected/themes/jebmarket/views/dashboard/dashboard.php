<?php
$this->pageHeader = "Dashboard";
?>
<?php if(Yii::app()->user->hasFlash('message')){ ?>
    <div class="alert alert-info">
        <?php echo Yii::app()->user->getFlash('message'); ?>
    </div>
<?php } ?>

<div class="row">
<?php
/*$this->widget('zii.widgets.jui.CJuiSortable',array(
    'tagName' => 'div',
    'itemTemplate' => '<div class="col-sm-4" id="{id}"><div class="panel panel-default"><div class="panel-heading">{title}</div><div class="panel-body">{content}</div></div></div>',
    'items'=>array(
        'id1'=>'Item 1',
        'id2'=>'Item 2',
        'id3'=>'Item 3',
        'id4'=>'Item 4',
        'id5'=>'Item 6',
    ),
    'options'=>array(
        'delay'=>'300',
'handle'=> '.panel-heading',
        'opacity'=> 0.6
    ),
));*/
?>
<?php
$this->widget('application.components.Dashboard',array(
    'options'=>array(
        'handle'=> '.panel-heading',
        'opacity'=> 0.6
    ),
));
?>
</div>