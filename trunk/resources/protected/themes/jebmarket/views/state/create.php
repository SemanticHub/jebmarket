<?php
/* @var $this StateController */
/* @var $model State */

$this->menu=array(
	array('label'=>Yii::t('phrase','Manage States'), 'url'=>array('admin')),
);
?>
<h1 class="page-title"><?php echo Yii::t('phrase', 'Add a State') ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>