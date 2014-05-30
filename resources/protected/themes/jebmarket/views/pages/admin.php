<?php
$this->pageHeader = "Pages";
?>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-sortable-min.js"></script>
<div class="row admin_pages">
    <div class="col-md-3 admin_pages_left">
        <div class="admin_left_scroll">
            <h4>Navigation</h4>
            <div class="page_top_nav">
                <?php
                $this->widget('ext.MGridViewWidget.MGridViewWidget', array(
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
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url")),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url")));
                                    }elseif($data->route=='blog'){
                                        $class = CHtml::link($data->label,array("blog/blogPost/admin",'mid'=>$data->id),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url")));
                                    }elseif($data->type=='custom' || $data->type=='social' || $data->url=='site/login'){
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url", 'home')),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url", 'home')));
                                    }else{
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url", 'module')),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url", 'module')));
                                    }
                                    return $class;
                                },
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{settings}{delete}',
                            'buttons' => array(
                                'settings' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>'Yii::app()->createUrl("menu/update", array("id"=>$data->id))',
                                    'options'=>array('class'=>'glyphicon glyphicon-cog', "data-toggle"=>"modal", "data-target"=>"#update_menu")
                                ),
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
                $this->widget('ext.MGridViewWidget.MGridViewWidget', array(
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
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url")),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url")));
                                    }elseif($data->route=='blog'){
                                        $class = CHtml::link($data->label,array("blog/blogPost/admin",'mid'=>$data->id),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url")));
                                    }elseif($data->type=='custom' || $data->type=='social' || $data->url=='site/login'){
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url", 'home')),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url", 'home')));
                                    }else{
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url", 'module')),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url", 'module')));
                                    }
                                    return $class;
                                },
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{delete}',
                            'template'=>'{settings}{delete}',
                            'buttons' => array(
                                'settings' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>'Yii::app()->createUrl("menu/update", array("id"=>$data->id))',
                                    'options'=>array('class'=>'glyphicon glyphicon-cog', "data-toggle"=>"modal", "data-target"=>"#update_menu")
                                ),
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
                $this->widget('ext.MGridViewWidget.MGridViewWidget', array(
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
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url")),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url")));
                                    }elseif($data->route=='blog'){
                                        $class = CHtml::link($data->label,array("blog/blogPost/admin",'mid'=>$data->id),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url")));
                                    }elseif($data->type=='custom' || $data->type=='social' || $data->url=='site/login'){
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url", 'home')),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url", 'home')));
                                    }else{
                                        $class = CHtml::link($data->label,array($this->gridDataColumn("$data->url", 'module')),array("class"=> "admin_nav_gridLink", 'dataid'=>$data->id, 'dataurl'=>$this->gridDataColumn("$data->url", 'module')));
                                    }
                                    return $class;
                                },
                            'type'  => 'raw',
                        ),
                        array(
                            'class' => 'CButtonColumn',
                            'template'=>'{settings}{delete}',
                            'buttons' => array(
                                'settings' => array(
                                    'label'=> '',
                                    'imageUrl'=> false,
                                    'url'=>'Yii::app()->createUrl("menu/update", array("id"=>$data->id))',
                                    'options'=>array('class'=>'glyphicon glyphicon-cog', "data-toggle"=>"modal", "data-target"=>"#update_menu")
                                ),
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
        var topMenugroup = $("#topMenu-grid tbody").sortable({
            itemSelector: 'tr',
            delay: 100,
            containerSelector: 'tbody',
            onDrop: function($item, container, _super) {
                var data = topMenugroup.sortable("serialize").get();
                var jsonString = JSON.stringify(data);
                $.ajax({
                    'type':'POST',
                    'url':'<?php echo  CHtml::normalizeUrl(array('menu/order')); ?>',
                    'dataType':"json",
                    'cache':true,
                    'data':{Menu : jsonString},
                    'success':function(data){
                        $.fn.yiiGridView.update('topMenu-grid');
                    }
                });
            }
        })
        var mainMenugroup = $("#mainMenu-grid tbody").sortable({
            itemSelector: 'tr',
            delay: 100,
            containerSelector: 'tbody',
            onDrop: function($item, container, _super) {
                var data = mainMenugroup.sortable("serialize").get();
                var jsonString = JSON.stringify(data);
                $.ajax({
                    'type':'POST',
                    'url':'<?php echo  CHtml::normalizeUrl(array('menu/order')); ?>',
                    'dataType':"json",
                    'cache':true,
                    'data':{Menu : jsonString},
                    'success':function(data){
                        $.fn.yiiGridView.update('mainMenu-grid');
                    }
                });
            }
        })
        var footerMenugroup = $("#footerMenu-grid tbody").sortable({
            itemSelector: 'tr',
            delay: 100,
            containerSelector: 'tbody',
            onDrop: function($item, container, _super) {
                var data = footerMenugroup.sortable("serialize").get();
                var jsonString = JSON.stringify(data);
                $.ajax({
                    'type':'POST',
                    'url':'<?php echo  CHtml::normalizeUrl(array('menu/order')); ?>',
                    'dataType':"json",
                    'cache':true,
                    'data':{Menu : jsonString},
                    'success':function(data){
                        $.fn.yiiGridView.update('footerMenu-grid');
                    }
                });
            }
        })
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
            'success':function(html){
                $(".pages_update").html(html);
            }
        });
        $('.dash_second_menu .navbar-right').html('' +
            '<ul class="nav navbar-nav navbar-right">' +
            '<li><a href="<?php echo Yii::app()->baseUrl.'/menu/update?id='; ?>'+$(this).attr('dataid')+'" data-toggle="modal" data-target="#update_menu"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>' +
            '<li>' +
            <?php
                $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
                if(!empty($domainName->name)){
            ?>
            '<a href="<?php echo Yii::app()->baseUrl.'/'; ?>'+$(this).attr('dataurl')+'" target="_blank"><span class="glyphicon glyphicon-export"></span> View Page</a>' +
            <?php } ?>'</li>' +
            '</ul>'
        );return false;
    });
    $(".blog_ajax_link").live( "click", function() {
        $.ajax({
            'type':'POST',
            'url':$(this).attr("href"),
            'cache':true,
            'data':$(this).parents("pages-form").serialize(),
            'success':function(html){
                $(".pages_update").html(html);
            }
        });
        $('.dash_second_menu .navbar-right').html('' +
            '<ul class="nav navbar-nav navbar-right">' +
            '<li><a href="<?php echo Yii::app()->baseUrl.'/menu/update?id='; ?>'+$(this).attr('dataid')+'" data-toggle="modal" data-target="#update_menu"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>' +
            '<li>' +
            <?php
                $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
                if(!empty($domainName->name)){
            ?>
            '<a href="<?php echo Yii::app()->baseUrl.'/'; ?>'+$(this).attr('dataurl')+'" target="_blank"><span class="glyphicon glyphicon-export"></span> View Page</a>' +
            <?php } ?>'</li>' +
            '</ul>'
        );return false;
    });
</script>
<script type="text/javascript">
    var CKEDITOR_BASEPATH = '<?php echo Yii::app()->theme->baseUrl.'/comp/ckeditor/'; ?>';
</script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/comp/ckeditor/ckeditor.js"></script>