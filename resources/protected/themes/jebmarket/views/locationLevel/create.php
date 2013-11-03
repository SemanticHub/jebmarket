<?php
/* @var $this LocationLevelController */
/* @var $model LocationLevel */


$this->menu=array(
	array('label'=> Yii::t('phrase', 'Location Levels'), 'url'=>array('admin')),
    array('label' => Yii::t('phrase', 'Locations'), 'url' => array('/location/admin')),
);
?>

<h1 class="page-title">Create Location Level</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>