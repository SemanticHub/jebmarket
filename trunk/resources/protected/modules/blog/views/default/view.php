<div class="row">
    <div class="col-md-12">
        <h1 class="page-title">View Post</h1>
    </div>
    <div class="col-md-12">
        <div class="blog">
            <div class="view">
                <h4 class="post_header"><?php echo $model->post_title; ?></h4>
                <div class="date_comments_post">
                    <p id="date_post"><strong class="glyphicon glyphicon-time"></strong></strong> <?php echo $model->post_modified; ?></p>
                    <p id="comments_post"><strong class="glyphicon glyphicon-comment"></strong></strong> <?php echo $model->comment_count.' COMMENTS'; ?></p>
                </div>
                <div class="post_content_category">
                    <ul class="list-inline">
                        <?php
                        $model->category = explode(",", $model->category);
                        foreach($model->category as $tsqt){
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
                <?php echo $model->post_content; ?>
                <div class="post_content_tag">
                    <ul class="list-inline">
                        <?php
                        $model->tag = explode(",", $model->tag);
                        foreach($model->tag as $tsst){
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
        </div>
    </div>
    <div class="blog_comments_list">
        <?php if($model->comment_status == 'public'){ ?>
        <h4><?php echo $model->comment_count.' COMMENTS ON “'.$model->post_title.'”'; ?></h4>
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$listcomment,
            'itemView'=>'_commentview',
        ));

        $this->renderPartial('_viewform', array('comments'=>$comments));

        }elseif($model->comment_status == 'private'){
        if(!Yii::app()->user->isGuest){
        ?>
            <h4><?php echo $model->comment_count.' COMMENTS ON “'.$model->post_title.'”'; ?></h4>
            <?php $this->widget('zii.widgets.CListView', array(
                'dataProvider'=>$listcomment,
                'itemView'=>'_commentview',
            ));

            $this->renderPartial('_viewform', array('comments'=>$comments));

            }else{
                echo '<h4>Need to login for comments.</h4>';
        }}else{
            echo '<h4>No Comments Found.</h4>';
        } ?>
    </div>
</div>
