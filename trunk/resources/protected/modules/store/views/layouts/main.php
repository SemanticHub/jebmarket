<?php $this->beginContent('//layouts/column2'); ?>

    <nav class="navbar navbar-default navbar-store" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <?php
                    $store = Store::model()->find(array(
                        'condition'=> 'user_id=:user_id', 'params'=> array(':user_id'=>Yii::app()->user->id),
                    ));
                    echo ($store) ? $store->name : 'Store'
                    ?>
                </a>
            </div>

            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        if(isset($this->storeLinks) && sizeof($this->storeLinks) > 0 ) {
                        foreach($this->storeLinks as $linkItem) {
                    ?>
                    <li><a href="<?php echo $this->createUrl($linkItem['url'][0]) ?>"><?php echo $linkItem['icon'].' ' ?> <?php echo $linkItem['label'] ?></a></li>
                    <?php
                            }
                        }
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-th-list"></span> More<b class="caret"></b></a>
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'items' => $this->storeMenu,
                            'encodeLabel'=>false,
                            'htmlOptions' => array('class' => 'dropdown-menu'),
                            'activateItems' => true,
                            'activateParents' => true,
                            'activeCssClass' => 'active'
                        ));
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="store-view-content">
<?php echo $content; ?>
</div>
<?php $this->endContent(); ?>