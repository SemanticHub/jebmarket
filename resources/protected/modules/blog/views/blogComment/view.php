<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['blog']['active'] = true;
?>
<div class="row">
    <div class="col-md-5">
        <h1 class="page-title">View Blog Comment</h1>
    </div>
    <div class="col-md-7">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('Create Comment',array('create'), array('class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Update Comment',array('update', 'id'=>$model->comment_id), array('class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Delete Comment',array('#'), array('submit'=>array('delete','id'=>$model->comment_id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'btn btn-success')); ?>
                </li>
                <li>
                    <?php echo CHtml::link('Manage Comment',array('admin'), array('class'=>'btn btn-success')); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
		'comment_author',
		'comment_author_email',
		'comment_author_url',
		'comment_content',
		'comment_date',
	),
)); ?>
