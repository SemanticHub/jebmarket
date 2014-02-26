<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'View Stores', 'url'=>array('view')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
	array('label'=>'Manage Stores', 'url'=>array('admin')),
	array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
?>

<h1 class="page-title">Stores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
