<?php
/* @var $this DefaultController */

$this->menu = Yii::app()->params['usermenu'];
$this->menu['reports']['active'] = true;
?>
<div class="row">
    <h1 class="page-title">Visits Screen</h1>
    <?php
        $this->widget('JebReportWidget', array(
            'moduleName'=>'UserSettings',
            'actionName'=>'getResolution'
        ))
    ?>
</div>
<style>
    #widgetIframe iframe{
        height: 450px;
    }
</style>