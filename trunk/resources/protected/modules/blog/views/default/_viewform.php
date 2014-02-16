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