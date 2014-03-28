<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">View Email Template '<?php echo $model->name; ?>'</h1>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'name',
		'subject',
		'body:html',
	),
)); ?>
