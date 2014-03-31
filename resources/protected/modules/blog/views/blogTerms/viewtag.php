<?php
$this->menu=array(
    array('label'=>'Create Tag', 'url'=>array('createtag')),
    array('label'=>'Update Tag', 'url'=>array('updatetag', 'id'=>$model->term_id)),
    array('label'=>'Delete Tag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->term_id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View Tag";
$this->menuLinks=array(
    array('label'=>'Back To Blog Home', 'url'=>array('/blog/admin'), 'icon'=>'<span class="glyphicon glyphicon-arrow-left"></span> '),
    array('label'=>'Manage Tag', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
    'data'=>$model,
    'attributes'=>array(
        'name',
        'slug',
        'description',
        'count',
    ),
)); ?>
