<?php
/* @var $this CountryController */
/* @var $model Country */

$this->menu=array(
	array('label'=> Yii::t('phrase','Manage Countries'), 'url'=>array('admin')),
);
?>
<h1 class="page-title"><?php echo Yii::t('phrase', 'Add a Country')?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>