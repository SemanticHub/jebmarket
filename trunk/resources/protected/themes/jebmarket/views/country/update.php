<?php
/* @var $this CountryController */
/* @var $model Country */

$this->menu=array(
	array('label'=> Yii::t('phrase','Add a Country'), 'url'=>array('create')),
	array('label'=> Yii::t('phrase','Manage Countries'), 'url'=>array('admin')),
);
?>
<h1 class="page-title"><?php echo Yii::t('phrase','Update Country') . $model->name; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>