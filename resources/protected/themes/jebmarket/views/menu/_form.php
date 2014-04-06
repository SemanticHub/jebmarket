<div class="menu_form">
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'menu-form',
    'enableAjaxValidation' => true,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    )
));
?>
<div class="form-group">
    <?php echo $form->labelEx($model, 'url', array('class' => 'control-label col-lg-12')); ?>
    <div class="col-lg-12">
        <?php echo $form->textField($model, 'url', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'url', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'label', array('class' => 'control-label col-lg-12')); ?>
    <div class="col-lg-12">
        <?php echo $form->textField($model, 'label', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'label', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'visibility', array('class' => 'control-label col-lg-12')); ?>
    <div class="col-lg-12">
        <?php echo $form->dropDownList($model,'visibility',array('auto'=>'Auto', 'public'=>'Public', 'private'=>'Private'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'visibility', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'parent_id', array('class' => 'control-label col-lg-12')); ?>
    <div class="col-lg-12">
        <?php echo $form->dropDownList($model,'parent_id', CHtml::listData(Menu::model()->findAll(array('condition' => "jebapp_user_id =".Yii::app()->user->id)), 'id', 'label'), array('empty'=>'--SELECT--', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'parent_id', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'odr', array('class' => 'control-label col-lg-12')); ?>
    <div class="col-lg-12">
        <?php echo $form->textField($model, 'odr', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'odr', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'class', array('class' => 'control-label col-lg-12')); ?>
        <div class="col-lg-12">
            <?php echo $form->textField($model, 'class', array('class' => 'form-control')); ?>
            <?php echo $form->error($model, 'class', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group rememberMe">
        <div class="col-lg-12">
            <?php echo $form->checkBox($model, 'active', array('size' => 1, 'maxlength' => 1, 'checked' => 'checked')); ?>
            <?php echo $form->labelEx($model, 'active', array('class' => 'control-label')); ?>
            <?php echo $form->error($model, 'active', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
<div class="form-group buttons">
    <div class="col-lg-12">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <?php echo CHtml::Button('Save',array('onclick'=>'send();', 'class'=>'btn btn-primary btn-sm')); ?>

        <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php
Yii::app()->clientScript->registerScript(
    'update_menu_type',
    CHtml::ajax( array (
        'type'=> 'POST',
        'url'=> $this->createUrl('menuItemOptions'),
        'update'=> '#menuItemOptions',
        'data'=> array('type'=>'js:$("#Menu_type").val()', 'url'=> $model->url)
    )),
    CClientScript::POS_READY);
?>
<?php $this->endWidget(); ?>
</div>
<?php if($model->type == 'module'){ ?>
<script>$("#Menu_url").attr("disabled", true);</script>
<?php } ?>
<script>
    function send()
    {
        var data=$("#menu-form").serialize();
        $.ajax({
            type: 'POST',
            url: '<?php echo  CHtml::normalizeUrl(array('menu/update','id'=>$model->id)); ?>',
            data:data,
            success:function(data){
                $.fn.yiiGridView.update("topMenu-grid");
                $.fn.yiiGridView.update("mainMenu-grid");
                $.fn.yiiGridView.update("footerMenu-grid");
                $('.menu_form').html(data);
            },
            error: function(data) {
                $('.menu_form').html(data);
            },
            dataType:'html'
        });
    }
</script>