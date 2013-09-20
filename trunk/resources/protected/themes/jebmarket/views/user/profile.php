<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=$this->menu=Yii::app()->params['usermenu'];
$this->menu['profile']['active']=true;
?>

<h1 class="page-title">User <?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
    'htmlOptions' => array('class' => 'table table-view'),
	'attributes'=>array(
        'last_login',
        'timezone',
		'username',
        'userDetails.f_name',
        'userDetails.l_name',
		'email',
		'joined',
		'activationstatus',
        'userDetails.organization',
        'userDetails.address1',
        'userDetails.address2',
        'userDetails.country',
        'userDetails.state',
        'userDetails.city',
        'userDetails.zip',
        'userDetails.phone',
        'userDetails.fax',
        'userDetails.avater',
	),
)); ?>
