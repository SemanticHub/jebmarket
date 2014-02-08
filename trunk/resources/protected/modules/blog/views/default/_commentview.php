<?php
/* @var $this BlogCommentController */
/* @var $data BlogComment */
?>

<div class="row">
    <div class="col-md-2">
        <img id='avater_image' src="<?php echo UserDetails::model()->gravatar($data->comment_author_email); ?>" alt="" />
    </div>
    <div class="col-md-10">
        <p class="comment_pagename"><b><?php echo CHtml::encode($data->comment_author); ?></b></p>
        <p class="comment_pagedate"><?php echo CHtml::encode($data->comment_date_gmt); ?></p>
        <p><?php echo CHtml::encode($data->comment_content); ?></p>
    </div>
</div>
<hr />