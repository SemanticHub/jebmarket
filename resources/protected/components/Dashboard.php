<?php
/**
 * Coder: Emon <ekram.syed@gmail.com>
 * Date: 11/22/13
 * Time: 12:49 PM
 */
Yii::import('zii.widgets.jui.CJuiSortable');
Yii::import('zii.widgets.CPortlet');

class Dashboard extends CJuiSortable {

    protected $column = 3;
    protected $widgets = array();

    public function init() {
        parent::init();
        $this->setId('jebAppDashboard');
        $this->tagName = "div";
        $this->itemTemplate = $this->setItemTemplate();
        $this->items = $this->loadWidgets();
    }

    public function setItemTemplate(){
        $gridSpan = 12/$this->column;
        return '<div class="col-sm-'.$gridSpan.' panel-widget" id="{id}"><div class="panel panel-info">{content}</div></div>';
    }

    public function loadWidgets(){
        foreach (Yii::app()->params['portlets'] as $portlet) {
            if (Yii::app()->user->checkAccess('Dashboard.'.$portlet['name'])) {
                $this->widgets[$portlet['name']] = $this->controller->renderPartial('widgets/_'.$portlet['name'], array('widget'=>$portlet), true);
            }
        }
        return $this->widgets;
    }

    public function hasWidgetAccess($item = array()) {
        return Yii::app()->user->checkAccess('Dashboard.'.$item.name);
    }
} 