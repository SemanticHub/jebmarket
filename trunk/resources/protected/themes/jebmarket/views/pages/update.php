<?php
/* @var $this PagesController */
/* @var $model Pages */
$this->menu = Yii::app()->params['usermenu'];
$this->menu['pages']['active'] = true;
?>
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-title">Update Pages '<?php echo $model->title; ?>'</h1>
        </div>
        <div class="col-md-6">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Create Page',array('create'), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('View Page',array('view', 'id'=>$model->id), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Manage Pages',array('admin'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>