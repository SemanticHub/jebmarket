<?php
/**
 * @var $this SettingsController
 * @var $dataProvider CActiveDataProvider
 **/

$this->menu = Yii::app()->params['usermenu'];
?>
<h1 class="page-title"><?php echo Yii::t('phrase', 'Settings'); ?></h1>

<div class="panel-group" id="accordion">
    <?php foreach ($data as $tag => $param) { ?>
    <div class="panel panel-default">

        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $tag ?>">
                    <?php echo Yii::t('phrase', str_replace('-', ' ', $tag)); ?>
                </a>
            </h4>
        </div>

        <div id="<?php echo $tag ?>" class="panel-collapse collapse out">
            <div class="panel-body">
                <form class="form-horizontal"  role="form" id="settings-edit-form">
                    <?php foreach ($param as $key => $v) { ?>
                        <div class="form-group">
                            <label class="control-label col-sm-4"><?php echo $v['description'] ?></label>
                            <div class="col-sm-6">
                                <?php
                                $this->widget('editable.Editable', array(
                                    'type' => $v['type'],
                                    'name' => $v['name'],
                                    'pk' => $v['id'],
                                    'text' => $v['value'],
                                    'url' => $this->createUrl('settings/edit'),
                                    'title' => 'Enter user name',
                                    'placement' => 'right',
                                    'source' => ($v['options']) ? Editable::source($this->evaluateExpression($v['options']), 'name', 'name') : false,
                                ));
                                ?>
                                <p class="control-hint text-warning" style="font-style: italic">
                                    <strong><?php echo Yii::t('phrase', 'name') ?></strong>: <?php echo trim($v['name']); ?>
                                </p>
                            </div>
                        </div>
                    <?php } ?>
                </form>
            </div>
        </div>

    </div>
    <?php } ?>
</div>
