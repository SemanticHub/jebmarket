<?php
/* @var $this MediaController */
/* @var $data Media */
?>
<div class="view media_view">
	<label for="<?php echo $data->url; ?>"><?php echo CHtml::image(Yii::app()->baseUrl."/".Yii::app()->params["uploadPath"].Yii::app()->user->id."/media/".$data->url,"",array("class"=>"img-thumbnail")); ?></label>
    <input type="radio" id="<?php echo $data->url; ?>" value="<?php echo $data->url; ?>" name="mediaviewradio" class="radio_v">
	<br />
</div>