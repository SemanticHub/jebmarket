<?php

class SetupController extends StoreBaseController
{

	public function actionIndex()
	{
		CVarDumper::dump(Yii::app()->getModule('gii')->password);
	}
}