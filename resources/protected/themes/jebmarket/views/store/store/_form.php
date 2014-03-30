<div class="form-control-wrapper">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'store-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        )
    )); ?>

    <div class="note bs-callout bs-callout-info">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    </div>

    <?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>

    <!--<div class="form-group">
        <?php /*echo $form->labelEx($model, 'plan_id', array('class' => 'control-label col-lg-4')); */?>
        <div class="col-lg-8">
            <?php echo $form->hiddenField($model, 'plan_id'); ?>
            <?php /*echo $form->error($model, 'plan_id', array('class' => 'text-danger control-hint')); */?>
        </div>
    </div>-->
    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model, 'name', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'status', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->radioButtonList($model,'status', array('1'=> 'Enable', '0'=>'Disable'), array('separator'=>'&nbsp;','uncheckValue'=>'1')); ?>
            <?php echo $form->error($model, 'status', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'visibility', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->dropDownList($model, 'visibility', array('0'=>'Public', '1'=>'Private'), array('class' => 'form-control', 'empty' => '--SELECT--')); ?>
            <p class="help-block">Public store open for all, For private store member needs to login.</p>
            <?php echo $form->error($model, 'visibility', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'timezone', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php Yii::import('ext.JebHelper'); echo $form->dropDownList($model, 'timezone', JebHelper::listTimezone(), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'timezone'); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'expire', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php // echo $form->textField($model, 'expire', array('class' => 'form-control')); ?>
            <?php
            $this->widget('ext.timepicker.EJuiDateTimePicker',array(
                'model'=>$model,
                'attribute'=>'expire',
                'options'=>array(
                    'showAnim'=>'fold',
                    'dateFormat' => 'yy-mm-dd',
                    //'timeFormat' => '',//'hh:mm tt' default
                ),
                'htmlOptions'=>array(
                    'class' => 'form-control'
                ),
            ));
            ?>
            <?php echo $form->error($model, 'expire', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'location_id', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php $this->renderPartial('_location_info', array('ref' => $model->storeDetail->location_id)); ?>
            <?php echo $form->hiddenField($model->storeDetail, 'location_id'); ?>
            <?php echo $form->error($model->storeDetail, 'location_id', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <!--<div class="form-group">
        <?php /*echo $form->labelEx($model->storeDetail, 'city', array('class' => 'control-label col-lg-4')); */?>
        <div class="col-lg-8">
            <?php /*echo $form->textField($model->storeDetail, 'city', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); */?>
            <?php /*echo $form->error($model->storeDetail, 'city', array('class' => 'text-danger control-hint')); */?>
        </div>
    </div>-->
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'address', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'address', array('size' => 60, 'maxlength' => 140, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'address', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'zip', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'zip', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'zip', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'phone', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'phone', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'phone', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'fax', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'fax', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'fax', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'email', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'email', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'email', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'lat', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'lat', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'lat', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'lon', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'lon', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'lon', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'timetable', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'timetable', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'timetable', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'tag', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'tag', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'tag', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'keyword', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'keyword', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'keyword', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model->storeDetail, 'description', array('class' => 'control-label col-lg-4')); ?>
        <div class="col-lg-8">
            <?php echo $form->textField($model->storeDetail, 'description', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model->storeDetail, 'description', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group buttons">
        <div class="col-lg-4"></div>
        <div class="col-lg-8">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
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
                    url: "<?php echo $this->createUrl('/location/levels'); ?>",
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
                    url: "<?php echo $this->createUrl('/location/levels'); ?>",
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
                $('#StoreDetail_location_id').val($('#location-level-view select').last().val());
                //$('#location-modal').modal('toggle');
                //if ($('#location-level-view select').last().attr('name') == "UserDetails[location]") {
                    $.ajax({
                        type: "GET",
                        url: "<?php  echo $this->createUrl('detail/location'); ?>",
                        data: { ref: $('#location-level-view select').last().val() }
                    }).done(function (data) {
                        $('#location').html(data);
                        $('#location-modal').modal('toggle');
                    });
                //} else {
                    // TODO: show message to select more levels
                //}
            });
        });
    </script>
    <?php $this->endWidget(); ?>

</div>