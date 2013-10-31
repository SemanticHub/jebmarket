<?php
/**
 * @var $this SettingsController
 * @var $model Settings
 **/

$this->menu=array(
    array('label'=> Yii::t('phrase','Settings'), 'url'=>array('index')),
    array('label'=> Yii::t('phrase','Manage Settings'), 'url'=>array('admin')),
);
?>
<h1 class="page-title"><?php echo Yii::t('phrase', 'Define a new Settings') ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>