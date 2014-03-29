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

<?php echo $content; ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 7]>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/html5shiv.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
<![endif]-->
<?php
//Its under testing
$t = new JebReportTracker( $idSite = 3, Yii::app()->params['piwikURL']);
$t->doTrackPageView('yii.jebmarket.com');
?>

</body>
</html>