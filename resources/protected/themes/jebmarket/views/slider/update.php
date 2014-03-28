<?php
/* @var $this SliderController */
/* @var $model Slider */
$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">Update Slider '<?php echo $model->headline; ?>'</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>