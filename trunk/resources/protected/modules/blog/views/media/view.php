<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['media']['active'] = true;
?>
<div class="row">
    <div class="col-md-5">
        <h1 class="page-title">View Media</h1>
    </div>
    <div class="col-md-7">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('Create Media',array('create'), array('class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Update Media',array('update', 'id'=>$model->id), array('class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Delete Media',array('#'), array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Manage Media',array('admin'), array('class'=>'btn btn-success')); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		'caption',
		'alternative_text',
		'description',
        array(
            'name'=>'url',
            'type'=>'html',
            'value'=> '<img width="400px" src="'.Yii::app()->getBaseUrl(true).'/'.Yii::app()->params["uploadPath"].Yii::app()->user->name.'/'.$model->url.'" />'
        ),
	),
)); ?>
