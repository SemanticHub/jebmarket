<?php
/* @var $this MediaController */
/* @var $data Media */
?>
<div class="view media_view">
	<label for="<?php echo $data->url; ?>"><?php echo CHtml::image(Yii::app()->getBaseUrl(true)."/".Yii::app()->params["uploadPath"].Yii::app()->user->name."/".$data->url,"",array("class"=>"img-thumbnail")); ?></label>
    <input type="radio" id="<?php echo $data->url; ?>" value="<?php echo $data->url; ?>" name="mediaviewradio" class="radio_v">
	<br />
</div>