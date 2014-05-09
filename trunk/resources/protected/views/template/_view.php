<?php
/* @var $this TemplateController */
/* @var $data Template */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('color')); ?>:</b>
	<?php echo CHtml::encode($data->color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('columns')); ?>:</b>
	<?php echo CHtml::encode($data->columns); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('layout')); ?>:</b>
	<?php echo CHtml::encode($data->layout); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categories')); ?>:</b>
	<?php echo CHtml::encode($data->categories); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_categories')); ?>:</b>
	<?php echo CHtml::encode($data->sub_categories); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('features')); ?>:</b>
	<?php echo CHtml::encode($data->features); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_name')); ?>:</b>
	<?php echo CHtml::encode($data->owner_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner_email')); ?>:</b>
	<?php echo CHtml::encode($data->owner_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('visibility')); ?>:</b>
	<?php echo CHtml::encode($data->visibility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_date')); ?>:</b>
	<?php echo CHtml::encode($data->update_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jebapp_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->jebapp_user_id); ?>
	<br />

	*/ ?>

</div>