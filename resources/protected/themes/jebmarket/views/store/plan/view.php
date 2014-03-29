<?php
$this->layout = "//layouts/modal"
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h4 class="modal-title page-title">Store Plan: <?php echo $model->name; ?></h4>
</div>
<div class="modal-body">
    <?php $this->widget('zii.widgets.CDetailView', array(
        'htmlOptions' => array('class' => 'table table-view'),
        'data'=>$model,
        'attributes'=>array(
            //'id',
            'name',
            //'is_default',
            array(
                'label' => 'Default ?',
                'type'=>'raw',
                'value' => ($model->is_default == 1) ? '<span class="glyphicon glyphicon-ok"></span>' : '<span class="glyphicon glyphicon-remove"></span>'
            ),
            'description',
            'thumb_width_height',
            'image_width_height',
            'image_max_size',
            'image_per_product',
            'max_disk_space',
            'max_bandwidth',
            'product_per_store',
            //'transaction_fee',
            array(
                'name' => 'transaction_fee',
                'value' => number_format($model->transaction_fee, 2)
            ),
            //'transaction_period',
            array(
                'name' => 'transaction_period',
                'value' => Yii::app()->getModule("store")->transactionPeriod[$model->transaction_period]
            ),
            array(
                'name' => 'transaction_fee_type',
                'value' => Yii::app()->getModule("store")->transactionType[$model->transaction_fee_type]
            ),
            //'transaction_fee_type',
        ),
    )); ?>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
</div>
