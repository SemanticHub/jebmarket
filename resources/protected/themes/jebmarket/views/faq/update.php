<?php
/* @var $this FaqController */
/* @var $model Faq */
$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">Update FAQ <?php echo $model->id; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>