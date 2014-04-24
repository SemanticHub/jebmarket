<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="createcategory();" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Category</p>
        <p onclick="updatecategory();" class="btn btn-default"><span class="glyphicon glyphicon-save"></span> Update Category</p>
    </div>
</div>
<script>
    function createcategory()
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
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
		'name',
		'slug',
		'description',
		'count',
	),
)); ?>
