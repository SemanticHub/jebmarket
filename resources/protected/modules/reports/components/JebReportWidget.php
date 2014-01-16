<?php

Yii::import('zii.widgets.CPortlet');

class JebReportWidget extends CPortlet {
    public $api_url = 'http://analytics.jebmarket.com/';
    public $token_auth = '';
    public $siteID = '';
    public $moduleName = '';
    public $actionName = '';
    public function	renderContent() {

        $report_connect = new JebReport('http://analytics.jebmarket.com/', '4954041b073a96a2fb58f5ec70d19a95');
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