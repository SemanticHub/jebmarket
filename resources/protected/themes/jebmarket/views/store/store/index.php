<?php
/* @var $this StoreController */
/* @var $dataProvider CActiveDataProvider */

/*$this->menu=array(
	array('label'=>'View Stores', 'url'=>array('view')),
    array('label' => 'Manage', 'linkOptions' => array('class' => 'list-group-title')),
	array('label'=>'Manage Stores', 'url'=>array('admin')),
	array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);*/
$this->menu['myStore']['active'] = true;
?>

<h1 class="page-title">Store Dashboard</h1>

<?php if ($action == 0) { ?>
    <div class="note bs-callout bs-callout-warning"><p> Ultimate Super Store has not been setup yet.</p></div>
    <div class="note bs-callout bs-callout-info"><p> As a super user you can setup the Ultimate Super Store with all the
            power and features.</p></div>
    <a class="btn btn-primary" href="<?php echo $this->createUrl('create'); ?>"><i class="glyphicon glyphicon-th-large">
            &nbsp;</i>Setup Store Now</a>
<?php
} else {
    $this->renderPartial('_dashboard', array('model' => $model));
} ?>

