<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">View FAQ #<?php echo $model->id; ?></h1>
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