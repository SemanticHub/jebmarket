<?php
$this->pageHeader = "Pages";
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
                            'value' =>function($data){
                                    if ($data->type=='page'){
                                        $class = CHtml::link($data->label,array("pages/update",'id'=>$this->gridDataColumn("$data->url"),'mid'=>$data->id),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }elseif($data->route=='blog'){
                                        $class = CHtml::link($data->label,array("blog/blogPost/admin",'mid'=>$data->id),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }elseif($data->type=='module' && $data->url=='site/login'){
                                        $class = '<p>'.$data->label.'</p>';
                                    }elseif($data->type=='custom' || $data->type=='social'){
                                        $class = CHtml::link($data->label,array("customlink", 'id'=>$data->id, 'tag'=>$data->tag),array("class"=>"admin_nav_gridLink"));
                                    }else{
                                        $class = CHtml::link($data->label,array("pages/pageins"),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }
                                    return $class;
                                },
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{delete}',
                            'buttons' => array(
                                'delete' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>function($data){
                                            if($data->type=='module' && $data->url=='site/login'){
                                                $class = Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>'login', "tag"=>$data->tag));
                                            }else{
                                                $class = Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>$this->gridDataColumn("$data->url")));
                                            }
                                            return $class;
                                        },
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
                            'value' =>function($data){
                                    if ($data->type=='page'){
                                        $class = CHtml::link($data->label,array("pages/update",'id'=>$this->gridDataColumn("$data->url"),'mid'=>$data->id),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }elseif($data->route=='blog'){
                                        $class = CHtml::link($data->label,array("blog/blogPost/admin",'mid'=>$data->id),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }elseif($data->type=='module' && $data->url=='site/login'){
                                        $class = '<p>'.$data->label.'</p>';
                                    }elseif($data->type=='custom' || $data->type=='social'){
                                        $class = CHtml::link($data->label,array("customlink", 'id'=>$data->id, 'tag'=>$data->tag),array("class"=>"admin_nav_gridLink"));
                                    }else{
                                        $class = CHtml::link($data->label,array("pages/pageins"),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }
                                    return $class;
                                },
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{delete}',
                            'buttons' => array(
                                'delete' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>function($data){
                                            if($data->type=='module' && $data->url=='site/login'){
                                                $class = Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>'login', "tag"=>$data->tag));
                                            }else{
                                                $class = Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>$this->gridDataColumn("$data->url")));
                                            }
                                            return $class;
                                        },
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
                            'value' =>function($data){
                                    if ($data->type=='page'){
                                        $class = CHtml::link($data->label,array("pages/update",'id'=>$this->gridDataColumn("$data->url"),'mid'=>$data->id),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }elseif($data->route=='blog'){
                                        $class = CHtml::link($data->label,array("blog/blogPost/admin",'mid'=>$data->id),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }elseif($data->type=='module' && $data->url=='site/login'){
                                        $class = '<p>'.$data->label.'</p>';
                                    }elseif($data->type=='custom' || $data->type=='social'){
                                        $class = CHtml::link($data->label,array("customlink", 'id'=>$data->id, 'tag'=>$data->tag),array("class"=>"admin_nav_gridLink"));
                                    }else{
                                        $class = CHtml::link($data->label,array("pages/pageins"),array("class"=> $data->parent_id ? "admin_nav_gridLink add_gap_left" : "admin_nav_gridLink"));
                                    }
                                    return $class;
                                },
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{delete}',
                            'buttons' => array(
                                'delete' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>function($data){
                                            if($data->type=='module' && $data->url=='site/login'){
                                                $class = Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>'login', "tag"=>$data->tag));
                                            }else{
                                                $class = Yii::app()->createUrl("menu/delete", array("id"=>$data->id, "pageId"=>$this->gridDataColumn("$data->url")));
                                            }
                                            return $class;
                                        },
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
<div class="modal fade" id="update_menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header"></div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
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
            content: $('<div class="tool_tip_page">' +
                '<h4><span class="glyphicon glyphicon-plus"></span> Create New Page</h4>' +
                '<ul>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-file"></span><br/>Add Page', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'mainmenu')), array('success'=>'mainMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-paperclip"></span><br/>Link Page', Yii::app()->createUrl("pages/create", array('type'=>'custom', 'tag'=>'mainmenu')), array('success'=>'mainMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-bold"></span><br/>Blog', Yii::app()->createUrl("pages/create", array('type'=>'blog', 'tag'=>'mainmenu')), array('success'=>'mainMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-link"></span><br/>Social Link', Yii::app()->createUrl("pages/create", array('type'=>'social', 'tag'=>'mainmenu')), array('success'=>'mainMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-user"></span><br/>Login / Register', Yii::app()->createUrl("pages/create", array('type'=>'login', 'tag'=>'mainmenu')), array('success'=>'mainMenu')); ?>' +
                '</ul>' +
                '</div>'),
            position: 'right',
            trigger: 'click'
        });
        $('.page_footer').tooltipster({
            content: $('<div class="tool_tip_page">' +
                '<h4><span class="glyphicon glyphicon-plus"></span> Create New Page</h4>' +
                '<ul>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-file"></span><br/>Add Page', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'footermenu')), array('success'=>'footerMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-paperclip"></span><br/>Link Page', Yii::app()->createUrl("pages/create", array('type'=>'custom', 'tag'=>'footermenu')), array('success'=>'footerMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-bold"></span><br/>Blog', Yii::app()->createUrl("pages/create", array('type'=>'blog', 'tag'=>'footermenu')), array('success'=>'footerMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-link"></span><br/>Social Link', Yii::app()->createUrl("pages/create", array('type'=>'social', 'tag'=>'footermenu')), array('success'=>'footerMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-user"></span><br/>Login / Register', Yii::app()->createUrl("pages/create", array('type'=>'login', 'tag'=>'footermenu')), array('success'=>'footerMenu')); ?>' +
                '</ul>' +
                '</div>'),
            position: 'right',
            trigger: 'click'
        });
        $('.page_top').tooltipster({
            content: $('<div class="tool_tip_page">' +
                '<h4><span class="glyphicon glyphicon-plus"></span> Create New Page</h4>' +
                '<ul>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-file"></span><br/>Add Page', Yii::app()->createUrl("pages/create", array('type'=>'page', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-paperclip"></span><br/>Link Page', Yii::app()->createUrl("pages/create", array('type'=>'custom', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-bold"></span><br/>Blog', Yii::app()->createUrl("pages/create", array('type'=>'blog', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-link"></span><br/>Social Link', Yii::app()->createUrl("pages/create", array('type'=>'social', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?>' +
                '<?php echo CHtml::ajaxLink('<span class="glyphicon glyphicon-user"></span><br/>Login / Register', Yii::app()->createUrl("pages/create", array('type'=>'login', 'tag'=>'topmenu')), array('success'=>'topMenu')); ?>' +
                '</ul>' +
                '</div>'),
            position: 'right',
            trigger: 'click'
        });
        $('.admin_left_scroll').jScrollPane();
    });
    $(document.body).on('hidden.bs.modal', function () {
        $('#update_menu').removeData('bs.modal')
    });
    $(".admin_nav_gridLink").live( "click", function() {
        $.ajax({
            'type':'POST',
            'url':$(this).attr("href"),
            'cache':true,
            'data':$(this).parents("pages-form").serialize(),
            'success':function(html){$(".pages_update").html(html)}
        });return false;
    });
    $(".blog_ajax_link").live( "click", function() {
        $.ajax({
            'type':'POST',
            'url':$(this).attr("href"),
            'cache':true,
            'data':$(this).parents("pages-form").serialize(),
            'success':function(html){$(".pages_update").html(html)}
        });return false;
    });
</script>
<script type="text/javascript">
    var CKEDITOR_BASEPATH = '<?php echo Yii::app()->theme->baseUrl.'/comp/ckeditor/'; ?>';
</script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/ckeditor/ckeditor.js"></script>