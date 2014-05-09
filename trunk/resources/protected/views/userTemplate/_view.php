<?php
/* @var $this UserTemplateController */
/* @var $data UserTemplate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('custom_template')); ?>:</b>
	<?php echo CHtml::encode($data->custom_template); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('custom_js')); ?>:</b>
	<?php echo CHtml::encode($data->custom_js); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('custom_css')); ?>:</b>
	<?php echo CHtml::encode($data->custom_css); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jebapp_template_id')); ?>:</b>
	<?php echo CHtml::encode($data->jebapp_template_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jebapp_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->jebapp_user_id); ?>
	<br />

	*/ ?>

</div>