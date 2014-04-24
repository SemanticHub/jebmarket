<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="updatecategory();" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</p>
        <p onclick="creatcategory();" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Category</p>
    </div>
    <?php $this->renderPartial('_formcategory', array('model'=>$model)); ?>
</div>
<script>
    function creatcategory()
    {
        var data=$("#blog-terms-form").serialize();
        $.ajax({
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
    function updatecategory()
    {
        var data=$("#blog-terms-form").serialize();
        $.ajax({
            type: 'POST',
            cache: true,
            url: '<?php echo  CHtml::normalizeUrl(array('BlogTerms/updatecategory?id='.$model->term_id)); ?>',
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