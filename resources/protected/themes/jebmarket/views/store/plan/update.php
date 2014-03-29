<?php
$this->storeLinks=array(
    array('label'=>'New Store Plan', 'url'=>array('create'), 'icon'=>'<span class="glyphicon glyphicon-plus"></span> '),
);
$this->storeMenu=array(
    array('label'=>'Manage Stores', 'url'=>array('/store/store/admin')),
    array('label'=>'Manage Store Plans', 'url'=>array('/store/plan/admin')),
);
?>

<h1 class="page-title">Update Store Plan <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>