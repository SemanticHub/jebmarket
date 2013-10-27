<?php
/* @var $this CityController */
/* @var $model City */

$this->menu=array(
	array('label'=>Yii::t('phrase','Add a City'), 'url'=>array('create')),
	array('label'=>Yii::t('phrase','Manage Cities'), 'url'=>array('admin')),
);
?>
<h1 class="page-title"><?php echo Yii::t('phrase','Update City') . $model->name; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>