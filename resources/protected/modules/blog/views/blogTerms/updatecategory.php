<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['blog']['active'] = true;
?>
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-title">Update Category</h1>
        </div>
        <div class="col-md-6">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Create Category',array('createcategory'), array('class'=>'btn btn-success')); ?>
                    </li>
                    <li>
                        <?php echo CHtml::link('Manage Category',array('category'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<?php $this->renderPartial('_formcategory', array('model'=>$model)); ?>