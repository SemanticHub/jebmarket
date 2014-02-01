<?php
/* @var $this PagesController */
/* @var $model Pages */
$this->menu = Yii::app()->params['usermenu'];
$this->menu['pages']['active'] = true;
?>
    <div class="row">
        <div class="col-md-5">
            <h1 class="page-title">View Page '<?php echo $model->title; ?>'</h1>
        </div>
        <div class="col-md-7">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Create Page',array('create'), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Update Page',array('update', 'id'=>$model->id), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Delete Page',array('#'), array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?', 'class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Manage Pages',array('admin'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
		'title',
		'content:html',
		'slug',
		'meta_title',
		'meta_desc',
		'meta_keywords',
                array(
                    'label' => 'Active',
                    'type'=>'raw',
                    'value' => ($model->active == 1) ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>'
                )
	),
)); ?>