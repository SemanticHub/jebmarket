<div class="blog_page">
    <div class="trd_page_menu">
        <p onclick="createtag();" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Tag</p>
        <p onclick="updatetag();" class="btn btn-default"><span class="glyphicon glyphicon-save"></span> Update Tag</p>
    </div>
</div>
<script>
    function createtag()
    {
        var data=$("#blog-terms-form").serialize();
        $.ajax({
            url: '<?php echo  CHtml::normalizeUrl(array('BlogTerms/createtag')); ?>',
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
    function updatetag()
    {
        var data=$("#blog-terms-form").serialize();
        $.ajax({
            type: 'POST',
            cache: true,
            url: '<?php echo  CHtml::normalizeUrl(array('BlogTerms/updatetag?id='.$model->term_id)); ?>',
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
