<div class="3rd_page_menu">
    <a href="<?php echo Yii::app()->baseUrl.'/blog/blogPost/create?mid='.$menu->id; ?>" class="btn btn-default blog_ajax_link"><span class="glyphicon glyphicon-plus"></span> Add Post</a>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	'id'=>'blog-post-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'post_title',
		'post_name',
        'post_status',
        'comment_status',
		'comment_count',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{view}{delete}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('phrase', 'Edit'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-warning btn-xs blog_ajax_link')
                ),
                'delete' => array(
                    'label' => Yii::t('phrase', 'Delete'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-danger btn-xs')
                ),
                'view' => array(
                    'label' => Yii::t('phrase', 'View'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-info btn-xs blog_ajax_link')
                )
            )
        ),
	),
)); ?>
<script>
    $('.dash_second_menu .navbar-right').html('' +
        '<ul class="nav navbar-nav navbar-right">' +
        '<li><a href="<?php echo Yii::app()->baseUrl.'/blog/blogPost/admin?mid='.$menu->id; ?>" class="blog_ajax_link"><span class="glyphicon glyphicon-th"></span> Manage Post</a></li>' +
        '<li><a href="<?php echo Yii::app()->baseUrl.'/blog/blogTerms/category'; ?>" class="blog_ajax_link"><span class="glyphicon glyphicon-th"></span> Manage Category</a></li>' +
        '<li><a href="<?php echo Yii::app()->baseUrl.'/blog/blogTerms/tag'; ?>" class="blog_ajax_link"><span class="glyphicon glyphicon-th"></span> Manage Tag</a></li>' +
        '<li><a href="<?php echo Yii::app()->baseUrl.'/blog/blogComment/admin'; ?>" class="blog_ajax_link"><span class="glyphicon glyphicon-th"></span> Manage Comment</a></li>' +
        '<li><a href="<?php echo Yii::app()->baseUrl.'/menu/update?id='.$menu->id; ?>" data-toggle="modal" data-target="#update_menu"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>' +
        '<li>' +<?php
        $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
        if(!empty($domainName->name)){
        ?>
        '<a href="<?php echo Yii::app()->baseUrl.'/'.$domainName->name.'/'.$menu->url; ?>" target="_blank"><span class="glyphicon glyphicon-export"></span> View Blog</a>' +
        <?php } ?>'</li>' +
        '</ul>'
    );
</script>