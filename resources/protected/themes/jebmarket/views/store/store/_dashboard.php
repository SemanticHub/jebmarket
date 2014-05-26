<div class="row store-dashboard">
    <div class="col-sm-3">
        <div class="panel panel-default panel-high" >
            <div class="panel-body">
                <h2>Today, $10</h2>
                <span class="label label-default">Orders 1</span> <span class="label label-default">Products 2</span></h4>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Yesterday, $8</li>
            </ul>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default panel-high" >
            <div class="panel-body">
                <h2>Week, $70</h2>
                <span class="label label-default">Orders 7</span> <span class="label label-default">Products 14</span></h4>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Last Week, $8</li>
            </ul>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default panel-high" >
            <div class="panel-body">
                <h2>Month, $300</h2>
                <span class="label label-default">Orders 30</span> <span class="label label-default">Products 60</span></h4>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Last Month, $8</li>
            </ul>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-default panel-high" >
            <div class="panel-body">
                <h2>So Far, $10,000</h2>
                <span class="label label-default">Orders 45</span> <span class="label label-default">Products 75</span></h4>
            </div>
            <ul class="list-group">
                <li class="list-group-item">Last Year, $300</li>
            </ul>
        </div>
    </div>

    <div class="col-sm-3">
        <div class="panel panel-default panel-mid">
            <div class="panel-body">
                <h3><span class="glyphicon glyphicon-barcode"></span> Products</h3>
                <span class="label label-success">Total:
                        <?php
                        echo Product::model()->count();
                        ?>
                </span>
                <span class="label label-success">Active:
                        <?php
                        echo Product::model()->count('status=1');
                        ?>
                 </span>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-info  panel-mid">
            <div class="panel-body">
                <h3><span class="glyphicon glyphicon-inbox"></span> Orders</h3>
                <span class="badge">0</span>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-info  panel-mid">
            <div class="panel-body">
                <h3><span class="glyphicon glyphicon-th-list"></span> Categories</h3>
                <span class="badge">0</span>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="panel panel-info  panel-mid">
            <div class="panel-body">
                <h3><span class="glyphicon glyphicon-user"></span> Customers</h3>
                <span class="badge">0</span>
            </div>
        </div>
    </div>

    <!--<div class="col-md-12">
        <div class="panel panel-success">
            <div class="panel-heading">
                <b class=""><span class="glyphicon glyphicon-th"></span> My Store</b>
            </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="label label-default"><?php /*echo CHtml::encode($model['store']->getAttributeLabel('name')); */?></span> <?php /*echo $model['store']->name; */?></li>
                    <li class="list-group-item"><span class="label <?php /*echo $model['store']->status ? 'label-success' : 'label-default' */?>"><?php /*echo CHtml::encode($model['store']->getAttributeLabel('status')); */?></span> <?php /*echo $model['store']->status ? 'Active' : 'Disabled'; */?></li>
                    <li class="list-group-item"><span class="label <?php /*echo $model['store']->visibility ? 'label-default' : 'label-info' */?>"><?php /*echo CHtml::encode($model['store']->getAttributeLabel('visibility')); */?></span> <?php /*echo $model['store']->visibility ? 'Private' : 'Public'; */?></li>
                    <li class="list-group-item"><span class="label label-default"><?php /*echo CHtml::encode($model['store']->getAttributeLabel('created')); */?></span> <?php /*echo Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($model['store']->created)); */?></li>
                    <li class="list-group-item"><span class="label label-default"><?php /*echo CHtml::encode($model['store']->getAttributeLabel('timezone')); */?></span> <?php /*echo $model['store']->timezone; */?></li>
                </ul>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <b class=""><span class="glyphicon glyphicon-globe"></span> My Store Address</b>
            </div>
            <div class="panel-body">
                <?php /*$this->renderPartial('_location_info', array('ref' => $model['store']->storeDetail->location_id)) */?>
                <br />
                <?php /*echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('address')); */?></span> <?php /*echo $model['store']->storeDetail->address; */?> |
                <?php /*echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('zip')); */?></span> <?php /*echo $model['store']->storeDetail->zip; */?>
            </div>
            <ul class="list-group">
                <li class="list-group-item"><span class="label label-default"><?php /*echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('email')); */?></span> <?php /*echo $model['store']->storeDetail->email; */?></li>
                <li class="list-group-item"><span class="label label-default"><?php /*echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('phone')); */?></span> <?php /*echo $model['store']->storeDetail->phone; */?></li>
                <li class="list-group-item"><span class="label label-default"><?php /*echo CHtml::encode($model['store']->storeDetail->getAttributeLabel('fax')); */?></span> <?php /*echo $model['store']->storeDetail->fax; */?></li>
            </ul>
        </div>
    </div>-->

</div>