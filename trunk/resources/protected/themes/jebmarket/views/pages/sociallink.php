<h4 style="margin: 0;">Social Link</h4>
<div class="socialmenu_form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'socialmenu-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        )
    ));
    ?>
    <div class="col-md-4">
        <?php echo $form->labelEx($model, 'url', array('class' => 'control-label', 'style' => 'height: 28px;')); ?>
        <?php echo $form->textField($model, 'url', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'url', array('class' => 'text-danger control-hint')); ?>
    </div>
    <div class="col-md-4">
        <?php echo $form->labelEx($model, 'label', array('class' => 'control-label')); ?>
        <?php echo $form->textField($model, 'label', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'label', array('class' => 'text-danger control-hint')); ?>
    </div>
    <div class="col-md-3">
        <?php echo $form->labelEx($model, 'visibility', array('class' => 'control-label')); ?>
        <?php echo $form->dropDownList($model,'visibility',array('auto'=>'Auto', 'public'=>'Public', 'private'=>'Private'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'visibility', array('class' => 'text-danger control-hint')); ?>
    </div>
    <div class="col-lg-1">
        <?php echo CHtml::Button('Add',array('onclick'=>'menusend();', 'class'=>'btn btn-primary btn-sm socialmenulink')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'socialMenu-grid',
    'itemsCssClass' => 'table table-striped table-hover',
    'summaryCssClass' => 'label label-info pull-right top-21',
    'htmlOptions' => array('class' => 'table-responsive'),
    'dataProvider' => $sociallink,
    'enableSorting'=>false,
    'enablePagination'=>false,
    'summaryText' => false,
    'pagerCssClass' => 'page-nav',
    'pager'=>array('header'=>'','selectedPageCssClass'=>'active','htmlOptions'=>array('class'=>'pagination')),
    'columns' => array(
        array(
            'name'=>'url',
            'header'=>'URL',
            'type'  => 'raw',
        ),
        array(
            'name'=>'label',
            'header'=>'Label',
            'type'  => 'raw',
        ),
        array(
            'name'=>'class',
            'header'=>'Icon',
            'type'  => 'raw',
        ),
        array(
            'name'=>'visibility',
            'header'=>'Visibility',
            'type'  => 'raw',
        ),
        array(
            'class' => 'CButtonColumn',
            'template'=>'{delete}',
            'buttons' => array(
                'delete' => array(
                    'label'=> '',
                    'imageUrl'=> false,
                    'url'=>function($data){
                            $class = Yii::app()->createUrl("menu/delete", array("id"=>$data->id));
                            return $class;
                        },
                    'options'=>array('class'=>'glyphicon glyphicon-remove')
                ),
            )
        ),
    ),
));
?>
<script>
    $('.dash_second_menu .navbar-right').html('');
    function menusend()
    {
        var data=$("#socialmenu-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo  CHtml::normalizeUrl(array('pages/sociallink?tag='.Yii::app()->request->getParam('tag'))); ?>',
            data:data,
            success:function(data){
                $.fn.yiiGridView.update("socialMenu-grid");
                $('.pages_update').html(data);
                $('#Menu_url, #Menu_label').val('');
            },
            error: function(data) {
                $.fn.yiiGridView.update("socialMenu-grid");
                $('.pages_update').html(data);
                $('#Menu_url, #Menu_label').val('');
            },
            dataType:'html'
        });
    }
</script>