<?php
/* @var $this FaqController */
/* @var $dataProvider CActiveDataProvider */
$this->layout = 'column1';
?>

<h1 class="page-title">FAQs</h1>

<?php $this->widget('zii.widgets.CListView', array(
        'summaryCssClass' => 'label label-success pull-right',
        'itemsCssClass' => 'panel-group',
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
