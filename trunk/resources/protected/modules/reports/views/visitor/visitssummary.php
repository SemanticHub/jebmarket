<?php
/* @var $this DefaultController */

$this->menu = Yii::app()->params['usermenu'];
$this->menu['reports']['active'] = true;
?>
<div class="row">
    <h1 class="page-title">Visits Summary</h1>
    <?php
        $this->widget('JebReportWidget', array(
            'moduleName'=>'VisitsSummary',
            'actionName'=>'index'
        ))
    ?>
</div>
<style>
    #widgetIframe iframe{
        height: 780px;
    }
</style>