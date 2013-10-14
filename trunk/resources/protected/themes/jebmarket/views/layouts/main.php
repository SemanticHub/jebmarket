<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php if(isset($this->metaDescription)) { ?><meta name="description" content="<?php echo $this->metaDescription ?>"><?php } ?>
        <?php if(isset($this->metaKeywords)) { ?><meta name="keywords" content="<?php echo $this->metaKeywords ?>"><?php } ?>
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/icon/favicon.png">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme.css">
        <?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <title><?php echo Yii::t('phrase', CHtml::encode($this->pageTitle)); ?></title>
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'encodeLabel'=>false,
                        'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                        'items' => Menu::model()->renderMenuItems("topmenu"),
                        'htmlOptions' => array('class' => 'nav nav-pills navbar-top'),
                    ));
                    ?>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-5">
                    <a class="navbar-brand logo" href="<?php echo Yii::app()->request->baseUrl; ?>"><?php echo Yii::t('phrase', CHtml::encode(Yii::app()->name)); ?></a>
                </div>
                <div class="col-md-7">
                    <div class="navbar navbar-inverse navbar-right navbar-main">
                        <!--<div class="container">-->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>                                
                            </div>
                            <div class="navbar-collapse collapse">
                                <?php
                                $this->widget('zii.widgets.CMenu', array(
                                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                                    'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                                    'activeCssClass'=>'active',
                                    'activateParents'=>true,
                                    'encodeLabel'=>false,
                                    'items' => Menu::model()->renderMenuItems("mainmenu"),
                                ));
                                ?>                            
                            </div>
                        <!--</div>-->
                    </div>
                </div>
                </div>    
            </div>
        </div>
        <div class="container">
            <?php
            foreach(Yii::app()->user->getFlashes() as $key => $message) {
                echo '<div class="alert alert-dismissable alert-' . $key . '"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' . $message . "</div>\n";
            }
            ?>
        </div>
        <?php echo $content; ?>
        <div class="container">
            <footer class="footer">
                <p class="pull-right"><a class="footer-logo" href="#"><?php echo Yii::t('phrase', 'Back to top')?></a></p>
                <span class="footer-menu">
                    <ul class="nav nav-pills navbar-footer" style="border-right: 1px solid #ddd">
                        <li>
                            <a style="color: #aaa"><?php echo Yii::t('phrase', '&copy; 2013 Jebmarket') ?></a>
                        </li>
                    </ul>
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => Menu::model()->renderMenuItems("footermenu"),
                        'htmlOptions' => array('class' => 'nav nav-pills navbar-footer'),
                    ));
                    ?>
                </span>
            </footer>
        </div>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>       
    </body>
</html>