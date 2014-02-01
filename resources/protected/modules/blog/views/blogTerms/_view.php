<?php
/* @var $this BlogTermsController */
/* @var $data BlogTerms */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('term_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->term_id), array('view', 'id'=>$data->term_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slug')); ?>:</b>
	<?php echo CHtml::encode($data->slug); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxonomy')); ?>:</b>
	<?php echo CHtml::encode($data->taxonomy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php echo CHtml::encode($data->parent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('count')); ?>:</b>
	<?php echo CHtml::encode($data->count); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('jebapp_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->jebapp_user_id); ?>
	<br />

	*/ ?>

</div>