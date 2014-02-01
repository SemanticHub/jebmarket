<?php
/* @var $this BlogOptionsController */
/* @var $data BlogOptions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->option_id), array('view', 'id'=>$data->option_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_name')); ?>:</b>
	<?php echo CHtml::encode($data->option_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_value')); ?>:</b>
	<?php echo CHtml::encode($data->option_value); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('autoload')); ?>:</b>
	<?php echo CHtml::encode($data->autoload); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jebapp_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->jebapp_user_id); ?>
	<br />


</div>