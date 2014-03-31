<?php
/* @var $this MenuController */
/* @var $model Menu */
?>
    <div class="row">
        <div class="col-md-12">
            <h1 class="for_menu"><?php echo $model->label; ?></h1>
        </div>
    </div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>