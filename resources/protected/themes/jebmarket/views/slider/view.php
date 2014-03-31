<?php
/* @var $this SliderController */
/* @var $model Slider */
$this->menu=array(
	array('label'=>'Create Slide', 'url'=>array('create')),
	array('label'=>'Update Slide', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Slide', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
$this->pageHeader = "View Slide '$model->headline'";
$this->menuLinks=array(
    array('label'=>'Manage Slider', 'url'=>array('admin'), 'icon'=>'<span class="glyphicon glyphicon-th"></span> '),
);
?>
<?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'headline',
		'content',
		'image',
                array(
                    'label' => 'Image Preview',
                    'type'=>'raw',
                    'value' => '<img width="400px" src="'.Yii::app()->baseUrl.'/'.Yii::app()->params['sliderImageUrl'].$model->image.'" />'
                ),
		'tag',
		'order',
		'class',
	),
)); ?>