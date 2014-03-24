<?php
$this->menu['storeCategories']['active'] = true;
?>

<h1 class="page-title">Store Product Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
