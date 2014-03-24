<?php
//$this->menu = Yii::app()->params['usermenu'];
$this->menu['myStore']['active'] = true;
?>
<div class="row">
    <div class="col-md-8">

        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-calendar"></span> Today</b>
                </div>
                <div class="panel-body">
                    <span class="badge">0</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-calendar"></span> This Week</b>
                </div>
                <div class="panel-body">
                    <span class="badge">0</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-calendar"></span> This Month</b>
                </div>
                <div class="panel-body">
                    <span class="badge">0</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-calendar"></span> So Far</b>
                </div>
                <div class="panel-body">
                    <span class="badge">0</span>
                </div>
            </div>
        </div>


        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-barcode"></span> Products</b>
                </div>
                <div class="panel-body">
                    <label class="label label-default" style="padding: 5px 10px">Total: <span class="badge badge-inverse">
                        <?php
                        echo Product::model()->count();
                        ?>
                    </span></label>
                      |
                    <label class="label label-success"  style="padding: 5px 10px">Active: <span class="badge badge-inverse">
                        <?php
                        echo Product::model()->count('status=1');
                        ?>
                    </span></label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-th-list"></span> Categories</b>
                </div>
                <div class="panel-body">
                    <span class="badge">0</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-user"></span> Customers</b>
                </div>
                <div class="panel-body">
                    <span class="badge">0</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b class=""><span class="glyphicon glyphicon-inbox"></span> Orders</b>
                </div>
                <div class="panel-body">
                    <span class="badge">0</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-success">
            <div class="panel-heading">
                <b class=""><span class="glyphicon glyphicon-th"></span> My Store</b>
            </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="label label-default"><?php echo CHtml::encode($model['store']->getAttributeLabel('name')); ?></span> <?php echo $model['store']->name; ?></li>
                    <li class="list-group-item"><span class="label <?php echo $model['store']->status ? 'label-success' : 'label-default' ?>"><?php echo CHtml::encode($model['store']->getAttributeLabel('status')); ?></span> <?php echo $model['store']->status ? 'Active' : 'Disabled'; ?></li>
                    <li class="list-group-item"><span class="label <?php echo $model['store']->visibility ? 'label-default' : 'label-info' ?>"><?php echo CHtml::encode($model['store']->getAttributeLabel('visibility')); ?></span> <?php echo $model['store']->visibility ? 'Private' : 'Public'; ?></li>
                    <li class="list-group-item"><span class="label label-default"><?php echo CHtml::encode($model['store']->getAttributeLabel('created')); ?></span> <?php echo Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($model['store']->created)); ?></li>
                    <li class="list-group-item"><span class="label label-default"><?php echo CHtml::encode($model['store']->getAttributeLabel('timezone')); ?></span> <?php echo $model['store']->timezone; ?></li>
                </ul>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <b class=""><span class="glyphicon glyphicon-globe"></span> My Store Address</b>
            </div>
            <div class="panel-body">
                <?php $this->renderPartial('_location_info', array('ref' => $model['store']->storeDetail->location_id)) ?>
                <br />
                <?php echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('address')); ?></span> <?php echo $model['store']->storeDetail->address; ?> |
                <?php echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('zip')); ?></span> <?php echo $model['store']->storeDetail->zip; ?>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><span class="label label-default"><?php echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('email')); ?></span> <?php echo $model['store']->storeDetail->email; ?></li>
                <li class="list-group-item"><span class="label label-default"><?php echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('phone')); ?></span> <?php echo $model['store']->storeDetail->phone; ?></li>
                <li class="list-group-item"><span class="label label-default"><?php echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('fax')); ?></span> <?php echo $model['store']->storeDetail->fax; ?></li>
            </ul>
        </div>
    </div>
</div>