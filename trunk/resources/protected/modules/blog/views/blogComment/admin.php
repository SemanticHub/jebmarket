<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['blog']['active'] = true;
?>
<div class="row">
    <div class="col-md-6">
        <h1 class="page-title">Manage Blog Comments</h1>
    </div>
    <div class="col-md-6">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('Create Blog Comment',array('create'), array('class'=>'btn btn-success')); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right',
    'htmlOptions' => array('class' => 'table-responsive'),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
	'id'=>'blog-comment-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'comment_author',
		'comment_author_email',
		'comment_content',
		'comment_status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
