<?php

Yii::import('zii.widgets.CPortlet');

class JebReportWidget extends CPortlet {
    public $api_url = '';
    public $token_auth = '';
    public $siteID = '';
    public $moduleName = '';
    public $actionName = '';
    public function	renderContent() {
        if (empty($api_url)) {
            $this->api_url = Yii::app()->params['piwikURL'];
        }
        $report_connect = new JebReport( Yii::app()->params['piwikURL'], Yii::app()->params['piwikSuperAdminToken']);
        if ($report_connect->hasError()) {
            echo "Invalid request";
        }else {
            $get_userinfo = $report_connect->getUser(Yii::app()->user->name);
            $get_accessinfo = $report_connect->getSitesAccessFromUser(Yii::app()->user->name);
            $get_userjson = json_decode($get_userinfo);
            $get_sitejson = json_decode($get_accessinfo);
            foreach ($get_userjson as $f){
                $this->token_auth = $f->{'token_auth'};
            }
            foreach ($get_sitejson as $g){
                $this->siteID = $g->{'site'};
            }
            if ($report_connect->hasError()){
                foreach ($report_connect->getErrors() as $error){
                    echo $error;
                }
            }
        }

        $this->render('_jebreportwidget');
    }
}
?>