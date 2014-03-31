<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu=array(
    array('label'=>'Create FAQs', 'url'=>array('create')),
    array('label'=>'Update FAQs', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete FAQs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View FAQs '$model->id'";
$this->menuLinks=array(
    array('label'=>'Manage FAQs', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'faq',
		'answer:html',
		'order',
		'active',
		'tag',
	),
)); ?>