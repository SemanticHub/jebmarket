<?php
/* @var $this DefaultController */
?>
<div class="row blog">
    <h1 class="page-title">Blog</h1>
    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
    )); ?>
</div>