<?php
/**
 * @var $this UserController
 * @var $model User
 */
$this->menu = $this->menu = Yii::app()->params['usermenu'];
$this->menu['profile']['active'] = true;
?>
<h1 class="page-title">User '<?php echo $model->username; ?>'</h1>
<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo Yii::t('phrase', 'Basic Info.') ?></div>
            <table class="table table-condensed table-view">
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

        <div class="panel panel-default">
            <div class="panel-heading"><?php echo Yii::t('phrase', 'Contact Info.') ?></div>
            <table class="table table-condensed table-view">
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
                        <?php echo $model->getAttributeLabel('userDetails.address2') ?>
                    </th>
                    <td>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.address2',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('userDetails.country') ?> /
                        <?php echo $model->getAttributeLabel('userDetails.state') ?> /
                        <?php echo $model->getAttributeLabel('userDetails.city') ?>
                    </th>
                    <td>
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.country',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?> &nbsp;/
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.state',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?> &nbsp;/
                        <?php
                        $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'userDetails.city',
                            'url' => $this->createUrl('userDetails/edit'),
                            'placement' => 'right',
                        ));
                        ?>
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
            <div class="panel-heading"><?php echo Yii::t('phrase', 'Quick Info.') ?></div>
            <table class="table table-condensed table-view">
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
                        <?php echo Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($model->getAttribute('joined'), 'yyyy-MM-dd hh:mm:ss'),'medium','medium');?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('last_login') ?>
                    </th>
                    <td>
                        <?php echo Yii::app()->dateFormatter->formatDateTime(CDateTimeParser::parse($model->getAttribute('last_login'), 'yyyy-MM-dd hh:mm:ss'),'medium','medium');?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo $model->getAttributeLabel('timezone') ?>
                    </th>
                    <td>
                        <?php
                            $this->widget('editable.EditableField', array(
                            'type' => 'text',
                            'model' => $model,
                            'attribute' => 'timezone',
                            'url' => $this->createUrl('user/edit'),
                            'placement' => 'right',
                        ));
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>