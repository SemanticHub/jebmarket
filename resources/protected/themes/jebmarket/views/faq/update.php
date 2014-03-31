<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu=array(
    array('label'=>'Create FAQs', 'url'=>array('create')),
    array('label'=>'View FAQs', 'url'=>array('view', 'id'=>$model->id)),
);
$this->pageHeader = "Update FAQs '$model->id'";
$this->menuLinks=array(
    array('label'=>'Manage FAQs', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>