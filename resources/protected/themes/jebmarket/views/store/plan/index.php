<?php
/* @var $this StorePlanController */
/* @var $dataProvider CActiveDataProvider */

$this->menu=array(
	array('label'=>'Create Store Plan', 'url'=>array('create')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label'=>'Manage Stores', 'url'=>array('admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
?>

<h1 class="page-title">Store Plans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
