<?php
/* @var $this LocationController */
/* @var $model Location */


$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">Update Location '<?php echo $model->name; ?>'</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>