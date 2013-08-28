<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu = array(
    array('label' => 'Manage FAQs', 'url' => array('admin')),
);
?>

<h1 class="page-title">Create FAQ</h1>
<?php $this->renderPartial('_form', array('model' => $model)); ?>

