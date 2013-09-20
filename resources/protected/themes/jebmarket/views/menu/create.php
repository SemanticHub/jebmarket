<?php
/* @var $this MenuController */
/* @var $model Menu */

$this->menu = array(
    array('label' => 'Manage Menu', 'url' => array('admin')),
);
?>
<h1 class="page-title">Create Menu Item</h1>
<?php $this->renderPartial('_form', array('model' => $model, 'listData'=> $listData)); ?>