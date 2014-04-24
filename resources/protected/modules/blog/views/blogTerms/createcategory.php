<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="blogcategory();" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</p>
    </div>
    <?php $this->renderPartial('_formcategory', array('model'=>$model)); ?>
</div>
<script>
    function blogcategory()
    {
        var data=$("#blog-terms-form").serialize();
        $.ajax({
            type: 'POST',
            cache: true,
            url: '<?php echo  CHtml::normalizeUrl(array('BlogTerms/createcategory')); ?>',
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