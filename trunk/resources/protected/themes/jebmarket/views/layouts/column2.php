<?php $this->beginContent('//layouts/dashboard'); ?>
<?php  if(isset($this->showTopNavBar) && ($this->showTopNavBar))  { ?>
<div class="col-md-10 dash_second_menu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <?php
                if(isset($this->pageHeader)){
                    echo $this->pageHeader;
                }
                ?>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($this->menuLinks) && sizeof($this->menuLinks) > 0) {
                    foreach($this->menuLinks as $linkItem) {
                        ?>
                        <li><a href="<?php echo $this->createUrl($linkItem['url'][0]) ?>"><?php echo $linkItem['icon'].' ' ?> <?php echo $linkItem['label'] ?></a></li>
                    <?php
                    }
                }if(isset($this->menu) && sizeof($this->menu) > 0){
                ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span> More<b class="caret"></b></a>
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => $this->menu,
                        'htmlOptions' => array('class' => 'dropdown-menu'),
                        'activateItems' => true,
                        'activateParents' => true,
                        'activeCssClass' => 'active'
                    ));
                    ?>
                </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>
<?php } ?>
<div class="col-md-10 dash_content_body">
    <?php echo $content; ?>
</div>
<?php $this->endContent(); ?>