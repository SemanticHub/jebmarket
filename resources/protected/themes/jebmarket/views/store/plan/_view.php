<?php
/* @var $this StorePlanController */
/* @var $data StorePlan */
?>
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_default')); ?>:</b>
	<?php echo CHtml::encode($data->is_default); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumb_width_height')); ?>:</b>
	<?php echo CHtml::encode($data->thumb_width_height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_width_height')); ?>:</b>
	<?php echo CHtml::encode($data->image_width_height); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_max_size')); ?>:</b>
	<?php echo CHtml::encode($data->image_max_size); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('image_per_product')); ?>:</b>
	<?php echo CHtml::encode($data->image_per_product); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_disk_space')); ?>:</b>
	<?php echo CHtml::encode($data->max_disk_space); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('max_bandwidth')); ?>:</b>
	<?php echo CHtml::encode($data->max_bandwidth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('product_per_store')); ?>:</b>
	<?php echo CHtml::encode($data->product_per_store); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_fee')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_fee); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_period')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_period); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('transaction_fee_type')); ?>:</b>
	<?php echo CHtml::encode($data->transaction_fee_type); ?>
	<br />

	*/ ?>

</div>