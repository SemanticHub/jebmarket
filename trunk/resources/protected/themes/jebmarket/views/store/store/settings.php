<?php
//$this->menu = Yii::app()->params['usermenu'];
//$this->menu['myStore']['active'] = true;
?>
<h1 class="page-title">Store Settings</h1>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <b class=""><span class="glyphicon glyphicon-th"></span> My Store</b>
            </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $store->getAttributeLabel('name') ?>
                        </span>
                        &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $store,
                            'attribute' => 'name',
                            'url' => $this->createUrl('store/update'),
                        ));
                        ?>
                    </li>
                    <li class="list-group-item">
                        <span class="label label-warning">
                            <?php echo $store->getAttributeLabel('status') ?>
                        </span>
                        &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'select',
                            'model' => $store,
                            'attribute' => 'status',
                            'url' => $this->createUrl('store/update'),
                            'source'    => array('1'=>'Active', '0'=> 'Disable'),
                        ));
                        ?>
                        <br/>
                        <small>You can disable the store for maintenance.</small>
                    </li>
                    <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $store->getAttributeLabel('visibility') ?>
                        </span>
                        &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'select',
                            'model' => $store,
                            'attribute' => 'visibility',
                            'url' => $this->createUrl('store/update'),
                            'source'    => array('1'=>'Public', '0'=> 'Private'),
                        ));
                        ?>
                        <br/>
                        <small>For private store customer need to login to view products.</small>
                    </li>
                    <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $store->getAttributeLabel('created') ?>
                        </span>
                        &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                        <?php echo Yii::app()->dateFormatter->formatDateTime($store->getAttribute('created')); ?>
                    </li>
                    <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $store->getAttributeLabel('expire') ?>
                        </span>
                        &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                        <?php echo Yii::app()->dateFormatter->formatDateTime($store->getAttribute('expire')); ?>
                    </li>
                </ul>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b class=""><span class="glyphicon glyphicon-globe"></span> My Store Location</b>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $storeDetail->getAttributeLabel('address') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'textarea',
                        'model' => $storeDetail,
                        'attribute' => 'address',
                        'url' => $this->createUrl('detail/update'),
                    ));
                    ?>
                </li>
                <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $storeDetail->getAttributeLabel('location_id') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php $this->renderPartial('_location_info', array('ref' => $storeDetail->location_id)); ?>
                </li>
                <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $storeDetail->getAttributeLabel('email') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'text',
                        'model' => $storeDetail,
                        'attribute' => 'email',
                        'url' => $this->createUrl('detail/update'),
                    ));
                    ?>
                </li>
                <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $storeDetail->getAttributeLabel('phone') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'text',
                        'model' => $storeDetail,
                        'attribute' => 'phone',
                        'url' => $this->createUrl('detail/update'),
                    ));
                    ?>
                </li>
                <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $storeDetail->getAttributeLabel('fax') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'text',
                        'model' => $storeDetail,
                        'attribute' => 'fax',
                        'url' => $this->createUrl('detail/update'),
                    ));
                    ?>
                </li>
                <li class="list-group-item">
                        <span class="label label-warning">
                            <?php echo $store->getAttributeLabel('timezone') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php
                    Yii::import('ext.JebHelper');
                    $this->widget('editable.EditableField', array(
                        'type' => 'select2',
                        'mode' => 'popup',
                        'model' => $store,
                        'attribute' => 'timezone',
                        'url' => $this->createUrl('store/update'),
                        'source' => Editable::source(JebHelper::listTimezone()),
                        'select2'   => array(
                            'width' => '250px'
                        )
                    ));
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b class=""><span class="glyphicon glyphicon-globe"></span> Store SEO</b>
            </div>
            <ul class="list-group">
                <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $storeDetail->getAttributeLabel('keyword') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'textarea',
                        'model' => $storeDetail,
                        'attribute' => 'keyword',
                        'url' => $this->createUrl('detail/update'),
                    ));
                    ?>
                </li>
                <li class="list-group-item">
                        <span class="label label-default">
                            <?php echo $storeDetail->getAttributeLabel('description') ?>
                        </span>
                    &#160; <span class="glyphicon glyphicon-arrow-right"></span>
                    <?php
                    $this->widget('editable.EditableField', array(
                        'type' => 'textarea',
                        'model' => $storeDetail,
                        'attribute' => 'description',
                        'url' => $this->createUrl('detail/update'),
                    ));
                    ?>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="modal fade" id="location-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Location</h4>
            </div>
            <div class="modal-body">
                <?php
                $listData = Location::model()->findAll(array('condition' => 'parent_id IS NULL', 'order' => 'name'));
                echo CHtml::dropDownList(
                    'location_root',
                    '',
                    CHtml::listData(
                        $listData,
                        'id',
                        'name'
                    ),
                    array(
                        'empty' => 'SELECT A COUNTRY',
                        'class' => 'form-control',
                    )
                );
                ?>
                <span id="location-level-view"></span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="location-update">Save Changes</button>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(function () {
        $('#location_root').live('change', function () {
            $.ajax({
                type: "POST",
                url: "<?php echo $this->createUrl('location/levels'); ?>",
                data: { location_id: $(this).val() }
            }).done(function (data) {
                $('#location-level-view').empty();
                var wrapper = $('<div/>').attr('class', 'location-level');
                $(data).appendTo(wrapper);
                $(wrapper).appendTo($('#location-level-view'));
            });
        });
        $('#location-level-view select').live('change', function (e) {
            $(e.target).parent().nextAll().remove();
            $.ajax({
                type: "POST",
                url: "<?php echo $this->createUrl('location/levels'); ?>",
                data: { location_id: $(this).val() }
            }).done(function (data) {
                if (data) {
                    var wrapper = $('<div/>').attr('class', 'location-level');
                    $(data).appendTo(wrapper);
                    $(wrapper).appendTo($('#location-level-view'));
                } else {
                    $('#location-level-view select').last().attr('name', 'UserDetails[location]');
                }
            });
        });
        $('#location-update').live('click', function () {
            if ($('#location-level-view select').last().attr('name') == "UserDetails[location]") {
                $.ajax({
                    type: "POST",
                    url: "<?php echo $this->createUrl('user/location'); ?>",
                    data: { location_id: $('#location-level-view select').last().val() }
                }).done(function (data) {
                    $('#location').html(data);
                    $('#location-modal').modal('toggle');
                });
            } else {
                // TODO: show message to select more levels
            }
        });
    });
</script>