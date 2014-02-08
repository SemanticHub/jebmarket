<?php
/* @var $this BlogPostController */
/* @var $data BlogPost */
?>

<div class="view">
    <h4 class="post_header"><?php echo CHtml::link(CHtml::encode($data->post_title), array('view', 'id'=>$data->id)); ?></h4>
    <div class="date_comments_post">
        <p id="date_post"><strong class="glyphicon glyphicon-time"></strong></strong> <?php echo CHtml::link(CHtml::encode($data->post_modified), array('view', 'id'=>$data->id)); ?></p>
        <p id="comments_post"><strong class="glyphicon glyphicon-comment"></strong></strong> <?php echo CHtml::link(CHtml::encode($data->comment_count.' COMMENTS'), array('view', 'id'=>$data->id)); ?></p>
    </div>
    <div class="post_content_category">
        <ul class="list-inline">
            <?php
                $data->category = explode(",", $data->category);
                foreach($data->category as $tsqt){
                $category = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category' AND term_id = '$tsqt'"));
                foreach($category as $tst){
            ?>
                <li><a href="#" class="label label-primary"><kbd><?php echo $tst->name; ?></kbd></a></li>
            <?php }} ?>
        </ul>
    </div>
    <?php echo $data->post_content; ?>
    <div class="post_content_tag">
        <ul class="list-inline">
            <?php
            $data->tag = explode(",", $data->tag);
            foreach($data->tag as $tsst){
                $tags = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag' AND term_id = '$tsst'"));
                foreach($tags as $ts){
            ?>
                <li><a href="#" class="badge"><kbd><?php echo $ts->name; ?></kbd></a></li>
            <?php }} ?>
        </ul>
    </div>
</div>
<hr />