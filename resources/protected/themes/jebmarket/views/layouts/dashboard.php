<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($this->metaDescription)) { ?>
        <meta name="description" content="<?php echo $this->metaDescription ?>"><?php } ?>
    <?php if (isset($this->metaKeywords)) { ?>
    <meta name="keywords" content="<?php echo $this->metaKeywords ?>"><?php } ?>
    <?php $domainname = Website::model()->domainName(); if(empty($domainname)){ ?>
    <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/favicon.ico">
    <?php }else{?>
        <link rel="shortcut icon" href="<?php echo Website::model()->logoName('favicon') ? Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].Website::model()->logoName('favicon') : Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].'favicon.ico'; ?>">
    <?php } ?>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme.css">
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
    <title><?php echo Yii::t('phrase', CHtml::encode($this->pageTitle)); ?></title>
</head>
<body>
<div class="container-fluid">
    <div class="row dashboard">
        <div class="col-md-2 sidebar sidebar-left">
            <?php
            if(!empty(Yii::app()->user->id)){
                $domainName = Website::model()->findByAttributes(array('jebapp_user_id'=>Yii::app()->user->id));
                if(!empty($domainName->name)){
                    $name = $domainName->name;
                }else{
                    $name = Yii::app()->user->name;
                }
            }
            ?>
            <div class="dashboard_top_left">
                <?php
                $this->beginWidget('zii.widgets.CPortlet', array(
                    'title' => '<span class="dashboard_icon"></span><span class="deshboard_dropname">'.$name.'</span>',
                    'decorationCssClass' => 'panel-heading',
                    'htmlOptions' => array('class' => 'panel panel-default')
                ));
                echo CHtml::link('Log Out',array("/site/logout"));
                if(!empty($domainName->domain)){
                    echo CHtml::link('View Your WebSite',array("/$domainName->domain"), array('target'=>'_blank'));
                }
                ?>
            </div>
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => Yii::app()->params['usermenu'],
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
        <?php echo $content; ?>
    </div>
</div>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 7]>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
<![endif]-->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>