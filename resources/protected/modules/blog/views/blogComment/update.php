<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="updatecomment();" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</p>
    </div>
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<script>
    function updatecomment()
    {
        var data=$("#blog-comment-form").serialize();
        $.ajax({
            type: 'POST',
            cache: true,
            url: '<?php echo  CHtml::normalizeUrl(array('BlogComment/update?id='.$model->comment_id)); ?>',
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