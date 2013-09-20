<?php
/* @var $this SliderController */
/* @var $model Slider */

$this->menu = array(
    array('label' => 'Create Slide', 'url' => array('create')),
);
?>

<h1 class="page-title">Manage Sliders</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'slider-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info',
    'htmlOptions' => array('class' => 'table-responsive'),
    'pagerCssClass' => 'page-nav',
    'pager' => array('header' => '', 'selectedPageCssClass' => 'active', 'htmlOptions' => array('class' => 'pagination')),
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'order',
            'htmlOptions' => array('style' => 'width:30px; text-align: right')
        ),
        'headline',
        'image',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{view}{delete}',
            'buttons' => array(
                'update' => array(
                    'label' => Yii::t('phrase', 'Edit'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-warning btn-xs')
                ),
                'delete' => array(
                    'label' => Yii::t('phrase', 'Delete'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-danger btn-xs')
                ),
                'view' => array(
                    'label' => Yii::t('phrase', 'View'),
                    'imageUrl' => false,
                    'options' => array('class' => 'btn btn-info btn-xs')
                )
            )
        ),
    ),
)); ?>
