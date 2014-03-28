<?php
/* @var $this SliderController */
/* @var $model Slider */
$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title">Create a Slider Slide</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>