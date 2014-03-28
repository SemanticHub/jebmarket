<?php
/**
 * @var $this EmailTemplateController
 * @var $model EmailTemplate
 */

$this->menu = Yii::app()->params['usermenu'];
?>

<h1 class="page-title">Manage Email Templates</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'email-template-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $model->search(),
    'pagerCssClass' => 'page-nav',
    'pager'=>array('header'=>'','selectedPageCssClass'=>'active','htmlOptions'=>array('class'=>'pagination')),
	'filter'=>$model,
	'columns'=>array(
		'name',
		'body:html',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
