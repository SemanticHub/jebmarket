<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($this->metaDescription)) { ?>
        <meta name="description" content="<?php echo $this->metaDescription ?>"><?php } ?>
    <?php if (isset($this->metaKeywords)) { ?>
        <meta name="keywords" content="<?php echo $this->metaKeywords ?>"><?php } ?>
    <?php
    $editID = Yii::app()->request->getParam('edit');
    $iframeID = Yii::app()->request->getParam('iframe');
    $domainname = Website::model()->domainName();
    if(empty($domainname)){
        ?>
        <link rel="shortcut icon" href="<?php echo Yii::app()->baseUrl; ?>/favicon.ico">
    <?php }else{?>
        <link rel="shortcut icon" href="<?php echo Website::model()->logoName('favicon') ? Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].Website::model()->logoName('favicon') : Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].'favicon.ico'; ?>">
    <?php } if(empty($editID) || !empty($iframeID)){ ?>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <?php Yii::app()->clientScript->registerCoreScript('jquery'); }else{Yii::app()->clientScript->scriptMap=array('jquery.js'=>false);} ?>

    <link rel="stylesheet" href="<?php echo $this->assetUrl; ?>/css/theme.css">

    <title><?php echo Yii::t('phrase', CHtml::encode($this->pageTitle)); ?></title>
</head>
<body>
<div class="header_body">
    <div class="navbar-wrapper" id="header_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if(empty($domainname)){ ?>
                        <a class="navbar-brand logo" href="<?php echo Yii::app()->HomeUrl; ?>"></a>
                    <?php }else{?>
                        <a class="navbar-brand logo_img" href="<?php echo Yii::app()->baseUrl.'/'.Website::model()->domainName(); ?>">
                            <?php
                            $logoDomain = Website::model()->logoName('logo');
                            if(empty($logoDomain)){
                                echo '<h1 class="logo_title">Your Site Logo</h1>';
                            }else{
                            ?>
                                <img src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].Website::model()->logoName('logo'); ?>" alt="" />
                            <?php } ?>
                        </a>
                    <?php } ?>
                    <div id="header_right">
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                            'encodeLabel' => false,
                            'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                            'items' => Menu::model()->renderMenuItems("topmenu"),
                            'htmlOptions' => array('class' => 'nav nav-pills navbar-top navbar-right clearfix'),
                        ));
                        ?>
                        <div class="navbar navbar-inverse navbar-main">
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
                                    'htmlOptions' => array('class' => 'nav navbar-nav navbar-right'),
                                    'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                                    'activeCssClass' => 'active',
                                    'activateParents' => true,
                                    'encodeLabel' => false,
                                    'items' => Menu::model()->renderMenuItems("mainmenu"),
                                ));
                                ?>
                            </div>
                        </div>
                        <?php if(Yii::app()->params['activationStatus']) {  ?>
                            <ul class="nav nav-pills nav_active clearfix">
                                <li id="alert" class="label label-warning">
                                    <?php echo '<span class="label label-danger">'.Yii::app()->params['activationStatus']['count'].'</span>'. Yii::t('phrase', ' days left to verify your account'); ?>
                                </li>
                            </ul>
                            <script type="text/javascript">
                                $(function(){
                                    var alertPopover = $('#alert').popover({
                                        html: true,
                                        placement: 'bottom',
                                        trigger: 'click',
                                        content: '<div style="margin:0; text-align: center" class="alert alert-danger">' +
                                            '<span class="glyphicon glyphicon-info-sign"></span> &#160; If you don\'t verify your email within next <span class="label label-danger">' +
                                            <?php echo Yii::app()->params['activationStatus']['count'] ?> +
                                            '</span> days, your account will be suspended.' +
                                            '<br /><?php echo CHtml::ajaxLink("<span class=\"glyphicon glyphicon-send\"></span> &#160; Resend Verification Email Now", Yii::app()->createUrl("/user/sendajaxverification"), array('data' => '', 'update' => '#flashMessages'), array("class" => "btn btn-xs btn-primary")) ?></div>'
                                    });
                                });
                            </script>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content_body">
    <?php echo $content; ?>
</div>
<div class="footer_body">
    <div class="container">
        <footer class="footer">
            <?php if(empty($domainname)){ ?><p class="pull-right"><a class="footer-logo" href="#"><?php echo Yii::t('phrase', 'Back to top') ?></a></p><?php } ?>
            <span class="footer-menu">

                <?php if(empty($domainname)){ ?>
                <ul class="nav nav-pills navbar-footer" style="border-right: 1px solid #ddd">
                    <li>
                        <a style="color: #aaa"><?php echo Yii::t('phrase', '&copy; 2013 Jebmarket') ?></a>
                    </li>
                </ul>
                <?php } ?>

                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => Menu::model()->renderMenuItems("footermenu"),
                    'htmlOptions' => array('class' => 'nav nav-pills navbar-footer'),
                ));
                ?>
            </span>
        </footer>
    </div>
</div>
<?php if(empty($editID) || !empty($iframeID)){ ?>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 7]>
<script src="<?php echo $this->assetUrl; ?>/js/html5shiv.js"></script>
<script src="<?php echo $this->assetUrl; ?>/js/respond.min.js"></script>
<![endif]-->
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<?php
}
echo '<style>'.UserTemplate::model()->customCSS().'</style>';
?>
</body>
</html>
<?php $this->widget('ext.ThemeEdit.ThemeEdit'); ?>