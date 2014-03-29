<?php
$this->layout = "//layouts/modal"
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title page-title">Store: <?php echo $model->name; ?></h4>
</div>
<div class="modal-body">
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table table-view'),
	'data'=>$model,
	'attributes'=>array(
		//'id',
        array(
            'name' => 'id',
            'label' => 'Store ID',
            'value' => $model->id
        ),
		//'user_id',
        array(
            'name'=>'user_id',
            'value'=>User::model()->findByPk($model->user_id)->username
        ),
		//'plan_id',
        array(
            'name' => 'plan_id',
            'value' => StorePlan::model()->findByPk($model->plan_id)->name
        ),
		'name',
		//'status',
         array(
            'name' => 'status',
            'type'=>'html',
            'value' => ($model->status == 1) ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>'
        ),
		//'visibility',
        array(
            'name' => 'visibility',
            'type'=>'html',
            'value' => $model->visibility == 0 ? "<span class=\"label label-warning\">Private</span>" : "<span class=\"label label-primary\">Public</span>"
        ),
		'timezone',
		'created',
		'updated',
		'expire',
	),
)); ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
</div>
