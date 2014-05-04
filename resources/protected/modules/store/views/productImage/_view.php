<?php
/* @var $this ProductImageController */
/* @var $data ProductImage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_id')); ?>:</b>
	<?php echo CHtml::encode($data->product_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_file')); ?>:</b>
	<?php echo CHtml::encode($data->image_file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alt_text')); ?>:</b>
	<?php echo CHtml::encode($data->alt_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title_txt')); ?>:</b>
	<?php echo CHtml::encode($data->title_txt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('order')); ?>:</b>
	<?php echo CHtml::encode($data->order); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_default')); ?>:</b>
	<?php echo CHtml::encode($data->is_default); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tag')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>
	<br />

	*/ ?>

</div>