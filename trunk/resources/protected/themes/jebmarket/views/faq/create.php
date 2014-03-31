<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->pageHeader = "Create FAQs";
$this->menuLinks=array(
    array('label'=>'Manage FAQs', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->renderPartial('_form', array('model' => $model)); ?>