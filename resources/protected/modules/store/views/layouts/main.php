<?php $this->beginContent('//layouts/column2'); ?>

    <nav class="row navbar navbar-default navbar-store" role="navigation">
            <div class="navbar-header col-md-6">
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
                <div class="status">
                    <?php
                    echo  ($store->status ? '<span class="label label-success">Active</span>' : '<span class="label label-warning">Disabled</span>')
                        . ' '
                        . ( $store->visibility ? '<span class="label label-info">Private</span>' : '<span class="label label-info">Public</span>')
                        . ' '
                        . ('<span class="label label-default">' . $store->timezone . '</span>');
                    ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($this->storeLinks) && sizeof($this->storeLinks) > 0 ) {
                            foreach($this->storeLinks as $linkItem) {
                                ?>
                                <li class="dropdown">
                                    <a <?php if(isset($linkItem['id'])) { ?>id="<?php echo $linkItem['id']; }?>"
                                        <?php if(isset($linkItem['class'])) { ?> class="<?php echo $linkItem['class'];} ?>"
                                                    href="<?php echo $this->createUrl($linkItem['url'][0]) ?>"
                                        <?php if(isset($linkItem['items']) && sizeof($linkItem['items']) > 0 ) { ?>
                                            class="dropdown-toggle" data-toggle="dropdown" <?php } ?>>
                                <?php echo $linkItem['icon'].'' ?><?php echo $linkItem['label'] ?>
                                    </a>
                                    <?php
                                    if(isset($linkItem['items']) && sizeof($linkItem['items']) > 0 ) {
                                        $this->widget('zii.widgets.CMenu', array(
                                            'items' => $linkItem['items'],
                                            'encodeLabel'=>false,
                                            'htmlOptions' => array('class' => 'dropdown-menu'),
                                            'activateItems' => true,
                                            'activateParents' => true,
                                            'activeCssClass' => 'active'
                                        ));
                                    }
                                    ?>
                                </li>
                            <?php
                            }
                        }
                        if(isset($this->storeMenu) && sizeof($this->storeMenu) > 0 ) {
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
                        <?php } ?>
                    </ul>
                </div>
            </div>

    </nav>

    <div class="store-view-content">
        <?php echo $content; ?>
    </div>

<?php $this->endContent(); ?>