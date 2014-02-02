<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['media']['active'] = true;
?>
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-title">Update Media</h1>
        </div>
        <div class="col-md-6">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Create Media',array('create'), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Manage Media',array('admin'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>