<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="blogpost();" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</p>
    </div>
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<script>
    CKEDITOR.replace('BlogPost[post_content]');
    function blogpost()
    {
        $('#BlogPost_post_content').html(CKEDITOR.instances['BlogPost_post_content'].getData());
        var data=$("#blog-post-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo  CHtml::normalizeUrl(array('BlogPost/create?mid='.Yii::app()->request->getParam('mid'))); ?>',
            data:data,
            success:function(data){
                $('.blog_page').html(data);
            },
            error: function(data) {
                $('.blog_page').html(data);
            },
            dataType:'html'
        });
    }
</script>