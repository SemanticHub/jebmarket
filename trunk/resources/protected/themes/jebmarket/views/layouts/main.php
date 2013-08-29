<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/icon/favicon.png">
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
        <title><?php echo Yii::t('phrase', CHtml::encode($this->pageTitle)); ?></title>
    </head>

    <body>
        <div class="navbar-wrapper">
            <div class="container">
                <div class="row">
                <div class="col-md-2">
                    <a class="navbar-brand logo" href="<?php echo Yii::app()->request->baseUrl; ?>"><?php echo Yii::t('phrase', CHtml::encode(Yii::app()->name)); ?></a>
                </div>
                <div class="col-md-10">
                    <div class="navbar navbar-inverse navbar-static-top">
                        <div class="container">
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
                                    'items' => array(
                                        array('label' => Yii::t('phrase', 'Home'), 'url' => array('/site/index')),
                                        array('label' => Yii::t('phrase', 'About'), 'url' => array('/site/page', 'view' => 'about')),
                                        array('label' => Yii::t('phrase', 'Contact'), 'url' => array('/site/contact')),
                                        array('label' => Yii::t('phrase', 'FAQ'), 'url' => array('/faq/index'), 'visible' => Yii::app()->user->isGuest),
                                        array('label' => Yii::t('phrase', 'FAQ'), 'url' => array('/faq/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => Yii::t('phrase', 'Pages'), 'url' => array('/pages/admin'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => Yii::t('phrase', 'Settings'), 'url' => array('/settings/index'), 'visible' => !Yii::app()->user->isGuest),
                                        array('label' => Yii::t('phrase', 'signup'), 'url' => array('/user/signup')),
                                        array('label' => Yii::t('phrase', 'Login'), 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                                        array('label' => Yii::t('phrase', 'Logout') . ' (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                                    ),
                                ));
                                ?>                            
                            </div>
                        </div>
                    </div>
                </div>
                </div>    
            </div>
        </div>      

        <?php echo $content; ?>        
        
        <div class="container">
            <footer class="footer">
                <p class="pull-right"><a class="footer-logo" href="#"><?php echo Yii::t('phrase', 'Back to top')?></a></p>
                <p class="footer-menu"><a style="color: #aaa"><?php echo Yii::t('phrase', '&copy; 2013 Jebmarket') ?></a><span class="separator"> | </span><a href="#">Privacy</a><span class="separator"> | </span><a href="#">Terms</a></p>
            </footer>
        </div>
        
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5shiv.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>        
    </body>
</html>
