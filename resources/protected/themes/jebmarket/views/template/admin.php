<?php
/* @var $this TemplateController */
/* @var $model Template */
$this->pageHeader = "Templates";
$this->menuLinks=array(
    array('label'=>'Install Template', 'url'=>array('/template'), 'icon'=>'<span class="glyphicon glyphicon-download"></span> '),
);
?>

<div class="admin_template">
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_userTemplate',
        'template'=>"{items}",
        'id'=>"template_list",
    )); ?>
</div>