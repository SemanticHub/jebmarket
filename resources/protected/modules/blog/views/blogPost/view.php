<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['blog']['active'] = true;
?>
<div class="row">
    <div class="col-md-5">
        <h1 class="page-title">View Post</h1>
    </div>
    <div class="col-md-7">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('Create Post',array('create'), array('class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Update Post',array('update', 'id'=>$model->id), array('class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Delete Post',array('#'), array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Manage Post',array('admin'), array('class'=>'btn btn-success')); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
        'post_title',
		'post_content',
		'post_name',
		'post_status',
		'comment_status',
		'post_date',
		'post_modified',
		'comment_count',
	),
)); ?>
