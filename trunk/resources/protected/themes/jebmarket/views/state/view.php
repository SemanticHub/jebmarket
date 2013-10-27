<?php
$this->menu=array(
    array('label'=>Yii::t('phrase','Add a State'), 'url'=>array('create')),
    array('label'=>Yii::t('phrase','Update State'), 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>Yii::t('phrase','Delete State'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>Yii::t('phrase','Manage States'), 'url'=>array('admin')),
);
?>

<h1 class="page-title">View State '<?php echo $model->name; ?>'</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'name',
        array(
            'name' => 'country_id',
            'value' => Country::model()->findByPk($model->country_id)->name,
        ),
	),
)); ?>
