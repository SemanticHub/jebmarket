<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3 sidebar sidebar-left">
            <?php
            $this->beginWidget('zii.widgets.CPortlet', array(
                'title' => 'Navigate To',
                'decorationCssClass' => 'panel-heading',
                //'contentCssClass' => 'panel-body',
                'htmlOptions' => array('class' => 'panel panel-primary')
            ));
            $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'itemCssClass' => 'list-group-item',
                'htmlOptions' => array('class' => 'list-group'),
            ));
            $this->endWidget();
            ?>
        </div>
        
        <div class="col-md-9">
            <?php echo $content; ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>