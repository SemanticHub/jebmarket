<?php
/**
 * @var $this EmailTemplateController
 * @var $model EmailTemplate
 */
$this->pageHeader = "Manage Email Templates";
$this->menuLinks=array(
    array('label'=>'Create Email Template', 'url'=>array('create'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
?>
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
