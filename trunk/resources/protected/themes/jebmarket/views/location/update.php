<?php

$this->menu=array(
	array('label' => Yii::t('phrase','Create Location'), 'url'=>array('create')),
	array('label' => Yii::t('phrase','View Location'), 'url'=>array('view', 'id'=>$model->id)),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label' => Yii::t('phrase', 'Locations'), 'url' => array('/location/admin')),
    array('label' => Yii::t('phrase', 'Location Levels'), 'url' => array('/locationLevel/admin')),
);
?>

<h1 class="page-title">Update Location '<?php echo $model->name; ?>'</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>