<?php
/**
 * @var $this UserController
 * @var $model User
 */
$this->menu = Yii::app()->params['usermenu'];
$this->menu['profile']['active'] = true;
?>
<h1 class="page-title">User '<?php echo $model->username; ?>'</h1>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default" style="min-height: 159px;">
            <div class="panel-heading"><?php echo Yii::t('phrase', 'Basic Info.') ?></div>
            <table class="table table-view">
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('full_name') ?>
                    </th>
                    <td>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.f_name',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                        &nbsp;
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.l_name',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('organization') ?>
                    </th>
                    <td>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.organization',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('email') ?>
                    </th>
                    <td>
                        <?php echo $model->getAttribute('email'); ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-info" style="min-height: 159px;">
            <div class="panel-heading"><?php echo Yii::t('phrase', '<span class="glyphicon glyphicon-picture"></span> Profile Image.') ?></div>
            <table class="table table-view">
                <tr>
                    <img id='avater_image' src="<?php echo $userdetails->avater ? Yii::app()->baseUrl.'/'.Yii::app()->params['avateruploadPath'].'/'.$userdetails->avater : UserDetails::model()->gravatar($model->email,'110'); ?>" alt="" />
                    <?php
                    $this->widget('ext.JebUpload.JebUpload',
                        array(
                            'id'=>'uploadFile',
                            'config'=>array(
                                'action'=>Yii::app()->createUrl('UserDetails/Uploadavater/'.$model->user_details_id),
                                'allowedExtensions'=>array("jpg", "jpeg", "gif", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
                                'sizeLimit'=>Yii::app()->params['profileimagesizemax'],
                                'minSizeLimit'=>Yii::app()->params['profileimagesizemin'],
                                'onSubmit'=>"js:function(file, extension) {
                                    $('div.preview').addClass('loading');
                                  }",
                                'onComplete'=>"js:function(file, response, responseJSON) {
                                  $('#avater_image').load(function(){
                                    $('div.preview').removeClass('loading');
                                    $('#avater_image').unbind();
                                    $('#Associazioni_logo').val(responseJSON['filename']);
                                  });
                                  $('#avater_image').attr('src', '".Yii::app()->baseUrl."/".Yii::app()->params['avateruploadPath']."'+responseJSON['filename']);
                                }",
                            )
                        ));
                    ?>
                </tr>
            </table>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo Yii::t('phrase', 'Contact Info.') ?></div>
            <table class="table table-view">
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('userDetails.address1') ?>
                    </th>
                    <td>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.address1',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('userDetails.location') ?>
                    </th>
                    <td>
                        <?php $this->renderPartial('_location_info', array('ref' => $model->userDetails->location)); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('userDetails.zip') ?>
                    </th>
                    <td>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.zip',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('userDetails.phone') ?> /
                        <?php echo $model->getAttributeLabel('userDetails.fax') ?>
                    </th>
                    <td>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.phone',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?> &nbsp;/
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.fax',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel panel-info">
            <div
                class="panel-heading"><?php echo Yii::t('phrase', '<span class="glyphicon glyphicon-info-sign"></span> Quick Info.') ?></div>
            <table class="table table-view">
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('activationstatus') ?>
                    </th>
                    <td>
                        <?php echo ($model->activationstatus == 1) ? "<span class=\"glyphicon glyphicon-ok\"></span>" : "<span class=\"glyphicon glyphicon-remove\"></span>" ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('joined') ?>
                    </th>
                    <td>
                        <?php echo Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($model->getAttribute('joined'), 'yyyy-MM-dd hh:mm:ss'), 'medium', 'medium'); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('last_login') ?>
                    </th>
                    <td>
                        <?php echo Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($model->getAttribute('last_login'), 'yyyy-MM-dd hh:mm:ss'), 'medium', 'medium'); ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('timezone') ?>
                    </th>
                    <td>
                        <?php
                        Yii::import('ext.JebHelper');
                        $this->widget('editable.EditableField', array(
                            'type' => 'select2',
                            'mode' => 'popup',
                            'model' => $model,
                            'attribute' => 'timezone',
                            'url' => $this->createUrl('user/edit'),
                            'source' => Editable::source(JebHelper::listTimezone()),
                            'placement' => 'left',
                            'select2'   => array(
                                'width' => '250px'
                            )
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Local Time</th>
                    <td>
                        <?php
                        $userTimezone = $model->getAttribute('timezone');
                        Yii::app()->setTimeZone($userTimezone);
                        $localTime = new DateTime();
                        $localTime->setTimezone(new DateTimeZone($userTimezone));
                        echo '<label class="label label-info">'.Yii::app()->dateFormatter->formatDateTime($localTime->format('Y-m-d H:i:s'), 'medium', 'medium').'</label>';
                        //echo $localTime->format('Y-m-d H:i:s');
                        ?>
                    </td>
                </tr>
            </table>
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