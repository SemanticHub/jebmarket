<?php
$this->menu = Yii::app()->params['usermenu'];
?>
<div class="createAuthItem">
	<h1 class="page-title"><?php echo Rights::t('core', 'Create :type', array(
		':type'=>Rights::getAuthItemTypeName($_GET['type']),
	)); ?></h1>
	<?php $this->renderPartial('_form', array('model'=>$formModel)); ?>
</div>