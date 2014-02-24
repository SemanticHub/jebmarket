<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-2 sidebar sidebar-left">
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => '<span class="glyphicon glyphicon-list"></span> Navigate To',
                    'decorationCssClass' => 'panel-heading',
                    'htmlOptions' => array('class' => 'panel panel-default')
                ));
                $this->widget('zii.widgets.CMenu', array(
                    'items' => $this->menu,
                    'encodeLabel'=>false,
                    'itemCssClass' => 'list-group-item',
                    'htmlOptions' => array('class' => 'list-group'),
                    'activateItems' => true,
                    'activateParents' => true,
                    'activeCssClass' => 'active'
                ));
                $this->endWidget();
                ?>
            </div>

            <div class="col-md-10">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
<?php $this->endContent(); ?>