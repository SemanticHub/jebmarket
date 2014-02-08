<?php
/* @var $this BlogCommentController */
/* @var $data BlogComment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author_email')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author_email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_author_url')); ?>:</b>
	<?php echo CHtml::encode($data->comment_author_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_content')); ?>:</b>
	<?php echo CHtml::encode($data->comment_content); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('comment_date_gmt')); ?>:</b>
    <?php echo CHtml::encode($data->comment_date_gmt); ?>
    <br />

</div>
<hr />