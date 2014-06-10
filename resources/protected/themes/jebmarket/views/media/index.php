<?php
$this->pageHeader = "Medias";

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
    'itemsCssClass'=>'row',
	'itemView'=>'_view',
));
?>
