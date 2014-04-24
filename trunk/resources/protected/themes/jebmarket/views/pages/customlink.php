<?php if (Yii::app()->user->hasFlash('customMenu')){ ?>
    <div class="alert alert-success" style="padding: 5px 10px;margin: -15px 0 5px 0;font-size: 15px;background: #000;border: none;border-radius: 0;color: white;">
        <?php echo Yii::app()->user->getFlash('customMenu'); ?>
    </div>
<?php } ?>
<h4 style="margin: 0 0 20px 0;">Custom Link Page</h4>
<div class="custommenu_form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'custommenu-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array(
            'class' => 'form-horizontal',
            'role' => 'form'
        )
    ));
    ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'url', array('class' => 'control-label col-lg-1')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'url', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'url', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'label', array('class' => 'control-label col-lg-1')); ?>
        <div class="col-lg-5">
            <?php echo $form->textField($model, 'label', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'label', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'visibility', array('class' => 'control-label col-lg-1')); ?>
        <div class="col-lg-5">
            <?php echo $form->dropDownList($model,'visibility',array('auto'=>'Auto', 'public'=>'Public', 'private'=>'Private'), array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'visibility', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
        <?php echo CHtml::Button(' Save ',array('onclick'=>'customsend();', 'class'=>'btn btn-primary')); ?>
    <?php $this->endWidget(); ?>
</div>
<script>
    $('.dash_second_menu .navbar-right').html('');
    function customsend()
    {
        var data=$("#custommenu-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo  CHtml::normalizeUrl(array('pages/customlink?id='.$model->id.'&tag='.Yii::app()->request->getParam('tag'))); ?>',
            data:data,
            success:function(data){
                <?php
                    if(Yii::app()->request->getParam('tag') == 'topmenu'){
                        echo "$.fn.yiiGridView.update('topMenu-grid');";
                    }elseif(Yii::app()->request->getParam('tag') == 'mainmenu'){
                        echo "$.fn.yiiGridView.update('mainMenu-grid');";
                    }elseif(Yii::app()->request->getParam('tag') == 'footermenu'){
                        echo "$.fn.yiiGridView.update('footerMenu-grid');";
                    }
                ?>
                $('.pages_update').html(data);
            },
            error: function(data) {
                <?php
                    if(Yii::app()->request->getParam('tag') == 'topmenu'){
                        echo "$.fn.yiiGridView.update('topMenu-grid');";
                    }elseif(Yii::app()->request->getParam('tag') == 'mainmenu'){
                        echo "$.fn.yiiGridView.update('mainMenu-grid');";
                    }elseif(Yii::app()->request->getParam('tag') == 'footermenu'){
                        echo "$.fn.yiiGridView.update('footerMenu-grid');";
                    }
                ?>
                $('.pages_update').html(data);
            },
            dataType:'html'
        });
    }
</script>