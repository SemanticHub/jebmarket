<?php
/* @var $this EmailTemplateController */
/* @var $model EmailTemplate */
$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">Create Email Template</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>