<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['blog']['active'] = true;
?>
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-title">Update Tag</h1>
        </div>
        <div class="col-md-6">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Create Tag',array('createtag'), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Manage Tag',array('tag'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $this->renderPartial('_formtag', array('model'=>$model)); ?>