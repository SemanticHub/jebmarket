<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="createpost();" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Post</p>
        <p onclick="updatepost();" class="btn btn-default"><span class="glyphicon glyphicon-save"></span> Update Post</p>
    </div>
</div>
<script>
    function createpost()
    {
        var data=$("#blog-terms-form").serialize();
        $.ajax({
            type: 'POST',
            cache: true,
            url: '<?php echo  CHtml::normalizeUrl(array('BlogPost/create')); ?>',
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
    function updatepost()
    {
        var data=$("#blog-terms-form").serialize();
        $.ajax({
            type: 'POST',
            cache: true,
            url: '<?php echo  CHtml::normalizeUrl(array('BlogPost/update?id='.$model->id)); ?>',
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
        'post_title',
		'post_name',
		'post_status',
		'comment_status',
		'post_date',
		'post_modified',
		'comment_count',
        array(
            'name'=>'post_content',
            'type'=>'html',
        ),
	),
)); ?>
