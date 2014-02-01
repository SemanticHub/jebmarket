
<?php
/* @var $this MenuController */
/* @var $model Menu */
$this->menu = Yii::app()->params['usermenu'];
$this->menu['menus']['active'] = true;
?>
<div class="row">
    <div class="col-md-6">
        <h1 class="page-title">Create Menu Item</h1>
    </div>
    <div class="col-md-6">
        <div class="right_top_menu">
            <ul class="list-inline">
                <li>
                    <?php echo CHtml::link('Manage Menu',array('admin'), array('class'=>'btn btn-success')); ?>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php $this->renderPartial('_form', array('model' => $model)); ?>