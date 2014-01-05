<?php
/**
 * Class JebTelinput
 *
 * Which text field you want to add this International Telephone Input, just add this code:
 *
        $this->widget('ext.JebTelinput.JebTelinput', array(
        'model'=>$model->userDetails, //here set model
        'attribute'=>'phone', //here set attribute
        'htmlOptions'=>array( //its html option for field
        'id' => 'UserDetails_phone', // Its id name for this text field
        'size' => 45,
        'maxlength' => 45,
        'class' => 'form-control input-sm'
        )
        ));
 *
 */
class JebTelinput extends CInputWidget
{
    public function run()
    {
        if(empty($this->htmlOptions['id']))
        {
            $this->htmlOptions['id'] = 'JebTelinput';
        }
        echo CHtml::activeTextField($this->model, $this->attribute, $this->htmlOptions);
        $id = $this->htmlOptions['id'];
        $assetUrl = Yii::app()->assetManager->publish(dirname(__FILE__) . '/assets/');
        $cs = Yii::app()->clientScript;
        $cs->registerCssFile($assetUrl . '/css/intlTelInput.css');
        $cs->registerScriptFile($assetUrl . '/js/intlTelInput.min.js');
        $script = "$('#".$id."').intlTelInput();";
        $cs->registerScript(__CLASS__ . '#' . $id , $script, CClientScript::POS_LOAD);
    }
}
?>