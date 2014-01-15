<?php
/* @var $this DefaultController */

$this->menu = Yii::app()->params['usermenu'];
$this->menu['reports']['active'] = true;
?>
<div class="row">
    <h1 class="page-title">Visitor Location</h1>
    <?php
        $this->widget('JebReportWidget', array(
            'moduleName'=>'UserCountry',
            'actionName'=>'getCountry'
        ))
    ?>
</div>
<style>
    #widgetIframe iframe{
        height: 450px;
    }
</style>