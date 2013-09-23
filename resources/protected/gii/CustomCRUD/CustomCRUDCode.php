<?php

/**
 * CustomCRUDCode class file.
 * @author Ramkrishna Chaulgain <rkcbabu@gmail.com>
 */

Yii::import('gii.generators.crud.CrudCode');

class CustomCRUDCode extends CrudCode
{
        public function __construct() {
            $this->baseControllerClass = 'CrudController';
        }
        
	public function generateActiveRow($modelClass, $column)
	{
		if ($column->type === 'boolean')
			return "\$form->checkBoxRow(\$model,'{$column->name}')";
		else if (stripos($column->dbType,'text') !== false)
			return "\$form->textAreaRow(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50, 'class'=>'span'))";
		else
		{
			if (preg_match('/^(password|pass|passwd|passcode)$/i',$column->name))
				$inputField='passwordFieldRow';
			else
				$inputField='textFieldRow';

			if ($column->type!=='string' || $column->size===null)
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span'))";
			else
				return "\$form->{$inputField}(\$model,'{$column->name}',array('class'=>'span','maxlength'=>$column->size))";
		}
	}
        
        public function generateActiveField($modelClass,$column)
	{
		if($column->type==='boolean')
			return "\$form->checkBox(\$model,'{$column->name}', array('class' => 'form-control'))";
		elseif(stripos($column->dbType,'text')!==false)
			return "\$form->textArea(\$model,'{$column->name}',array('rows'=>6, 'cols'=>50, 'class' => 'form-control'))";
		else
		{
			if(preg_match('/^(password|pass|passwd|passcode)$/i',$column->name))
				$inputField='passwordField';
			else
				$inputField='textField';

			if($column->type!=='string' || $column->size===null)
				return "\$form->{$inputField}(\$model,'{$column->name}', array('class' => 'form-control'))";
			else
			{
				if(($size=$maxLength=$column->size)>60)
					$size=60;
				return "\$form->{$inputField}(\$model,'{$column->name}',array('size'=>$size,'maxlength'=>$maxLength, 'class' => 'form-control'))";
			}
		}
	}
}
