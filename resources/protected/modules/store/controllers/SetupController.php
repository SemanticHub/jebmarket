<?php

class SetupController extends Controller
{
    public function filters() {
        return array(
            //'rights'
        );
    }

	public function actionIndex()
	{
		CVarDumper::dump(Yii::app()->getModule('gii')->password);
	}
}