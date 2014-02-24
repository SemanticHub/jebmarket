<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Store',
);

$this->menu=array(
	array('label'=>'Create Store', 'url'=>array('create')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
	array('label'=>'Manage Store', 'url'=>array('admin')),
);
?>

<h1 class="page-title">Stores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
