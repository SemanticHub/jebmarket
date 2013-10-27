<?php
/* @var $this CityController */
/* @var $model City */

$this->menu=array(
	array('label'=> Yii::t('phrase','Manage Cities'), 'url'=>array('admin')),
);
?>
<h1 class="page-title"><?php echo Yii::t('phrase', 'Add a City')?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>