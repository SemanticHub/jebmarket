<?php
/* @var $this BlogPostController */
/* @var $data BlogPost */
?>

<div class="view">
    <h4 class="post_header">
        <?php
        $user_id_url = Yii::app()->request->getParam('user_id');
        $userurl = null;
        if(!empty($user_id_url)){
            $user = User::model()->findByAttributes(array('id'=>$user_id_url));
            $userurl = '/'.$user->username.'/blog/';
        }
        echo CHtml::link(CHtml::encode($data->post_title), array($userurl.'default/view', 'id'=>$data->id));
        ?>
    </h4>
    <div class="date_comments_post">
        <p id="date_post"><strong class="glyphicon glyphicon-time"></strong></strong> <?php echo CHtml::link(CHtml::encode($data->post_modified), array($userurl.'default/view', 'id'=>$data->id)); ?></p>
        <p id="comments_post"><strong class="glyphicon glyphicon-comment"></strong></strong> <?php echo CHtml::link(CHtml::encode($data->comment_count.' COMMENTS'), array($userurl.'default/view', 'id'=>$data->id)); ?></p>
    </div>
    <div class="post_content_category">
        <ul class="list-inline">
            <?php
            $data->category = explode(",", $data->category);
            foreach($data->category as $tsqt){
                $category = BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category' AND term_id = '$tsqt'"));
                foreach($category as $tst){
                    if(!empty($user)){
                        echo '<li><a href="'.Yii::app()->baseURL.'/'.$user->username.'/blog/category/view/name/'.$tst->slug.'" class="label label-primary"><kbd>'.$tst->name.'</kbd></a></li>';
                    }else{
                        echo '<li><a href="'.Yii::app()->baseURL.'/blog/category/view/name/'.$tst->slug.'" class="label label-primary"><kbd>'.$tst->name.'</kbd></a></li>';
                    }
                }
            }
            ?>
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
                    if(!empty($user)){
                        echo '<li><a href="'.Yii::app()->baseURL.'/'.$user->username.'/blog/tag/view/name/'.$ts->slug.'" class="badge"><kbd>'.$ts->name.'</kbd></a></li>';
                    }else{
                        echo '<li><a href="'.Yii::app()->baseURL.'/blog/tag/view/name/'.$ts->slug.'" class="badge"><kbd>'.$ts->name.'</kbd></a></li>';
                    }
                }
            }
            ?>
        </ul>
    </div>
</div>
<hr />