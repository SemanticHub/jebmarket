<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-2 sidebar sidebar-left">
            <?php
            if(!empty(Yii::app()->user->id)){
                $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
                if(!empty($domainName->domain)){
                    echo CHtml::link('View Your WebSite',array("/$domainName->domain"),array('class'=>"btn btn-success btn-block btn-xs"));
                }
            }
            ?>
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