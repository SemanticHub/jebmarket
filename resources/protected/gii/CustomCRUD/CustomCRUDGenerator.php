<?php

/**
 * CustomCRUDCode class file.
 * @author Ramkrishna Chaulgain <rkcbabu@gmail.com>
 */
Yii::import('gii.generators.crud.CrudGenerator');

class CustomCRUDGenerator extends CrudGenerator
{
	public $codeModel = 'application.gii.CustomCRUD.CustomCRUDCode';
}