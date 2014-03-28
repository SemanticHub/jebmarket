<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['pages']['active'] = true;
?>
<div class="row admin_pages">
    <div class="col-md-3 admin_pages_left">
        <div class="admin_left_scroll">
            <h4>Navigation</h4>
            <div class="page_top_nav">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'topMenu-grid',
                    'itemsCssClass' => 'table table-striped table-hover',
                    'summaryCssClass' => 'label label-info pull-right top-21',
                    'htmlOptions' => array('class' => 'table-responsive'),
                    'dataProvider' => $topMenuData,
                    'enableSorting'=>false,
                    'enablePagination'=>false,
                    'summaryText' => false,
                    'pagerCssClass' => 'page-nav',
                    'pager'=>array('header'=>'','selectedPageCssClass'=>'active','htmlOptions'=>array('class'=>'pagination')),
                    'columns' => array(
                        array(
                            'name'=>'label',
                            'header'=>'Top Navigation',
                            'value' => '$data->pages_id ? CHtml::ajaxLink($data->label,Yii::app()->createUrl("pages/update",array("id"=>$data->pages_id)),array("type"=>"POST", "update"=>".pages_update"),array("class"=>"admin_nav_gridLink")) : $data->label',
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{settings}{delete}',
                            'buttons' => array(
                                'settings' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'options'=>array('class'=>'glyphicon glyphicon-cog top_page_setting')
                                ),
                                'delete' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>'Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>$data->pages_id))',
                                    'options'=>array('class'=>'glyphicon glyphicon-remove')
                                ),
                            )
                        ),
                    ),
                ));
                ?>
                <p class="add_new_page page_top"><span class="glyphicon glyphicon-plus"></span> Add Page</p>
            </div>
            <div class="page_top_nav">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'mainMenu-grid',
                    'itemsCssClass' => 'table table-striped table-hover',
                    'summaryCssClass' => 'label label-info pull-right top-21',
                    'htmlOptions' => array('class' => 'table-responsive'),
                    'dataProvider' => $mainMenuData,
                    'enableSorting'=>false,
                    'enablePagination'=>false,
                    'summaryText' => false,
                    'pagerCssClass' => 'page-nav',
                    'pager'=>array('header'=>'','selectedPageCssClass'=>'active','htmlOptions'=>array('class'=>'pagination')),
                    'columns' => array(
                        array(
                            'name'=>'label',
                            'header'=>'Main Navigation',
                            'value' => '$data->pages_id ? CHtml::ajaxLink($data->label,Yii::app()->createUrl("pages/update",array("id"=>$data->pages_id)),array("type"=>"POST", "update"=>".pages_update"),array("class"=>"admin_nav_gridLink")) : $data->label',
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{settings}{delete}',
                            'buttons' => array(
                                'settings' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'options'=>array('class'=>'glyphicon glyphicon-cog main_page_setting')
                                ),
                                'delete' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>'Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>$data->pages_id))',
                                    'options'=>array('class'=>'glyphicon glyphicon-remove')
                                ),
                            )
                        ),
                    ),
                ));
                ?>
                <p class="add_new_page page_main"><span class="glyphicon glyphicon-plus"></span> Add Page</p>
            </div>
            <div class="page_top_nav">
                <?php
                $this->widget('zii.widgets.grid.CGridView', array(
                    'id' => 'footerMenu-grid',
                    'itemsCssClass' => 'table table-striped table-hover',
                    'summaryCssClass' => 'label label-info pull-right top-21',
                    'htmlOptions' => array('class' => 'table-responsive'),
                    'dataProvider' => $footerMenuData,
                    'enableSorting'=>false,
                    'enablePagination'=>false,
                    'summaryText' => false,
                    'pagerCssClass' => 'page-nav',
                    'pager'=>array('header'=>'','selectedPageCssClass'=>'active','htmlOptions'=>array('class'=>'pagination')),
                    'columns' => array(
                        array(
                            'name'=>'label',
                            'header'=>'Footer Navigation',
                            'value' => '$data->pages_id ? CHtml::ajaxLink($data->label,Yii::app()->createUrl("pages/update",array("id"=>$data->pages_id)),array("type"=>"POST", "update"=>".pages_update"),array("class"=>"admin_nav_gridLink")) : $data->label',
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{settings}{delete}',
                            'buttons' => array(
                                'settings' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'options'=>array('class'=>'glyphicon glyphicon-cog footer_page_setting')
                                ),
                                'delete' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>'Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>$data->pages_id))',
                                    'options'=>array('class'=>'glyphicon glyphicon-remove')
                                ),
                            )
                        ),
                    ),
                ));
                ?>
                <p class="add_new_page page_footer"><span class="glyphicon glyphicon-plus"></span> Add Page</p>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="pages_update">
            <h1>This is not a user page. This page contain some Information</h1>
            <h3>Here Some Instruction About How To Create New Page and Menu</h3>
        </div>
    </div>
</div>
<div id='results'></div>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tooltipster.css">
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.tooltipster.min.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.jscrollpane.css">
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.jscrollpane.min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.mousewheel.js"></script>
<script>
    function topMenu(data) {
        $.fn.yiiGridView.update('topMenu-grid');
        $('.page_top').tooltipster(data);
    }
    function mainMenu(data) {
        $.fn.yiiGridView.update('mainMenu-grid');
        $('.page_main').tooltipster(data);
    }
    function footerMenu(data) {
        $.fn.yiiGridView.update('footerMenu-grid');
        $('.page_footer').tooltipster(data);
    }
    $(document).ready(function() {
        $('.page_main').tooltipster({
            content: $('<div class="tool_tip_page"><h4><span class="glyphicon glyphicon-plus"></span> Create New Page</h4><ul><li class="main_li"><span class="glyphicon glyphicon-file"></span><br/><?php echo CHtml::ajaxLink('Add Page', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'mainmenu')), array('success'=>'mainMenu')); ?></li><li><span class="glyphicon glyphicon-link"></span><br/><?php echo CHtml::ajaxLink('Link', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-bold"></span><br/><?php echo CHtml::ajaxLink('Blog', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-barcode"></span><br/><?php echo CHtml::ajaxLink('Products', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-phone-alt"></span><br/><?php echo CHtml::ajaxLink('Contact Us', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li></ul></div>'),
            position: 'right',
            trigger: 'click'
        });
        $('.page_footer').tooltipster({
            content: $('<div class="tool_tip_page"><h4><span class="glyphicon glyphicon-plus"></span> Create New Page</h4><ul><li class="footer_li"><span class="glyphicon glyphicon-file"></span><br/><?php echo CHtml::ajaxLink('Add Page', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'footermenu')), array('success'=>'footerMenu')); ?></li><li><span class="glyphicon glyphicon-link"></span><br/><?php echo CHtml::ajaxLink('Link', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-bold"></span><br/><?php echo CHtml::ajaxLink('Blog', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-barcode"></span><br/><?php echo CHtml::ajaxLink('Products', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-phone-alt"></span><br/><?php echo CHtml::ajaxLink('Contact Us', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li></ul></div>'),
            position: 'right',
            trigger: 'click'
        });
        $('.page_top').tooltipster({
            content: $('<div class="tool_tip_page"><h4><span class="glyphicon glyphicon-plus"></span> Create New Page</h4><ul><li class="top_li"><span class="glyphicon glyphicon-file"></span><br/><?php echo CHtml::ajaxLink('Add Page', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-link"></span><br/><?php echo CHtml::ajaxLink('Link', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-bold"></span><br/><?php echo CHtml::ajaxLink('Blog', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-barcode"></span><br/><?php echo CHtml::ajaxLink('Products', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li><li><span class="glyphicon glyphicon-phone-alt"></span><br/><?php echo CHtml::ajaxLink('Contact Us', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?></li></ul></div>'),
            position: 'right',
            trigger: 'click'
        });
        $('.footer_page_setting').tooltipster({
            content: $('<div class="tool_tip_page"><h4><span class="glyphicon glyphicon-plus"></span> Update Menu</h4><label>Name</label><br/><input type="text"><br/><label>URL </label><br/><input type="text"><button type="button" class="btn btn-primary btn-xs">Save</button></div>'),
            position: 'right',
            trigger: 'click'
        });
        $('.admin_left_scroll').jScrollPane();
    });
</script>