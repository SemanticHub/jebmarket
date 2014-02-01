<?php
/* @var $this MenuController */
/* @var $model Menu */
$this->menu = Yii::app()->params['usermenu'];
$this->menu['pages']['active'] = true;
?>
    <div class="row">
        <div class="col-md-5">
            <h1 class="page-title">View Menu '<?php echo $model->label; ?>'</h1>
        </div>
        <div class="col-md-7">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Create Menu',array('create'), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Update Menu',array('update', 'id'=>$model->id), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Delete Menu',array('#'), array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Manage Menu',array('admin'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
        'odr',
        array(
            'name' => 'label',
            'type' => 'raw'
        ),
		'url',
        'type',
		'visibility',
        array(
            'label' => 'Is Active',
            'type'=>'raw',
            'value' => ($model->active == 1) ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>'
        ),
		'parent_id',
		'tag',
	),
)); ?>