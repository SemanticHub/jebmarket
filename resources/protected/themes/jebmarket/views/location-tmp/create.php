<?php

$this->menu=array(
	array('label' => Yii::t('phrase', 'Manage Location'), 'url'=>array('admin')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
    array('label' => Yii::t('phrase', 'Locations'), 'url' => array('/location/admin')),
    array('label' => Yii::t('phrase', 'Location Levels'), 'url' => array('/locationLevel/admin')),
);
?>

<h1 class="page-title">Create A Location</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>