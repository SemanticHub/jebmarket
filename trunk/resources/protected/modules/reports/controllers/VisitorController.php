<?php

class VisitorController extends Controller
{
    /**
     * @var string the default layout for the views.
     */
    public $layout = '//layouts/column2';

    public function actionVisitsSummary()
    {
        $this->render('visitssummary');
    }
    public function actionVisitorMap()
    {
        $this->render('visitormap');
    }
    public function actionVisitorLocation()
    {
        $this->render('visitorlocation');
    }
    public function actionVisitsScreen()
    {
        $this->render('visitsscreen');
    }
}