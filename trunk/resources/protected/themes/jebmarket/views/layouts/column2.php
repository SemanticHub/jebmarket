<?php $this->beginContent('//layouts/dashboard'); ?>
    <div class="row dashboard">
        <div class="col-md-2 sidebar sidebar-left">
            <?php
            if(!empty(Yii::app()->user->id)){
                $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
                if(!empty($domainName->domain)){
                    $name = $domainName->domain;
                }else{
                    $name = Yii::app()->user->name;
                }
            }
            ?>
            <div class="dashboard_top_left">
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => '<span class="dashboard_icon"></span><span class="deshboard_dropname">'.$name.' <span class="glyphicon glyphicon-chevron-down"></span></span>',
                    'decorationCssClass' => 'panel-heading',
                    'htmlOptions' => array('class' => 'panel panel-default')
                ));
                ?>
            </div>
            <div class="popover fade bottom in dashboard_icon_drop">
                <div class="arrow"></div>
                <div class="popover-content">
                    <ul class="list-group">
                        <?php if(!empty($domainName->domain)){ ?>
                            <li class="list-group-item">
                                <?php echo CHtml::link('View Your WebSite',array("/$domainName->domain")); ?>
                            </li>
                        <?php } ?>
                        <li class="list-group-item">
                            <?php echo CHtml::link('Log Out',array("/site/logout")); ?>
                        </li>
                    </ul>
                </div>
            </div>
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'encodeLabel'=>false,
                'itemCssClass' => 'list-group-item',
                'htmlOptions' => array('class' => 'list-group'),
                'activateItems' => true,
                'activateParents' => true,
                'activeCssClass' => 'active'
            ));
            if(Yii::app()->user->id==40){ ?>
                <ul class="list-group" id="yw1">
                    <li class="list-group-item"><span class="list-group-title">Admin</span></li>
                </ul>
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => Yii::app()->params['adminmenu'],
                    'encodeLabel'=>false,
                    'itemCssClass' => 'list-group-item',
                    'htmlOptions' => array('class' => 'list-group'),
                    'activateItems' => true,
                    'activateParents' => true,
                    'activeCssClass' => 'active'
                ));
            }
            $this->endWidget();
            ?>
        </div>

        <div class="col-md-10">
            <?php echo $content; ?>
        </div>
    </div>
    <script>
        $(".dashboard .sidebar-left .panel-default>.panel-heading").click(function(){
            $(".dashboard_icon_drop").toggle();
        });
    </script>
<?php $this->endContent(); ?>