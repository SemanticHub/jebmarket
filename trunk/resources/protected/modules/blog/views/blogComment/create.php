<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="blogcomment();" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</p>
    </div>
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
<script>
    function blogcomment()
    {
        var data=$("#blog-comment-form").serialize();
        $.ajax({
            type: 'POST',
            cache: true,
            url: '<?php echo  CHtml::normalizeUrl(array('BlogComment/create')); ?>',
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