<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */

$this->menu = Yii::app()->params['usermenu'];
?>

<h1 class="page-title">Update Email Template <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>