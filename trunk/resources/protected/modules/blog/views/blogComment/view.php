<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="updatecomment();" class="btn btn-default"><span class="glyphicon glyphicon-save"></span> Update Comment</p>
    </div>
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
<?php $this->widget('zii.widgets.CDetailView', array(
    'htmlOptions' => array('class' => 'table  table-view'),
	'data'=>$model,
	'attributes'=>array(
		'comment_author',
		'comment_author_email',
		'comment_author_url',
		'comment_content',
		'comment_date',
	),
)); ?>
