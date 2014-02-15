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
        <h4><?php echo $model->comment_count.' COMMENTS ON “'.$model->post_title.'”'; ?></h4>
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$listcomment,
            'itemView'=>'_commentview',
        )); ?>
    </div>
    <div class="blog_form">
        <div class="col-md-6">
            <h4>LEAVE A REPLY</h4>
            <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'blog-comment-form',
                'enableAjaxValidation'=>true,
                'htmlOptions' => array(
                    'class' => 'form-horizontal',
                    'role' => 'form'
                )
            )); ?>

            <?php echo $form->errorSummary($comments, '', '', array('class' => 'alert alert-danger')); ?>

            <div class="form-group">
                <label class="control-label required" for="BlogComment_comment_author">Name <span class="required">*</span></label>
                <?php echo $form->textField($comments, 'comment_author', array('class' => 'form-control')); ?>
                <?php echo $form->error($comments, 'comment_author', array('class' => 'text-danger control-hint')); ?>
            </div>

            <div class="form-group">
                <label class="control-label" for="BlogComment_comment_author_email">Email <span class="required">*</span></label>
                <?php echo $form->textField($comments, 'comment_author_email', array('class' => 'form-control')); ?>
                <?php echo $form->error($comments, 'comment_author_email', array('class' => 'text-danger control-hint')); ?>
            </div>

            <div class="form-group">
                <label class="control-label" for="BlogComment_comment_author_url">Website</label>
                <?php echo $form->textField($comments, 'comment_author_url', array('class' => 'form-control')); ?>
                <?php echo $form->error($comments, 'comment_author_url', array('class' => 'text-danger control-hint')); ?>
            </div>

            <div class="form-group">
                <label class="control-label required" for="BlogComment_comment_content">Comment <span class="required">*</span></label>
                <?php echo $form->textArea($comments, 'comment_content', array('rows'=>6, 'cols'=>50, 'class' => 'form-control')); ?>
                <?php echo $form->error($comments, 'comment_content', array('class' => 'text-danger control-hint')); ?>
            </div>

            <div class="form-group buttons">
                <?php echo CHtml::submitButton('Post Comment', array('class' => 'btn btn-success')); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
