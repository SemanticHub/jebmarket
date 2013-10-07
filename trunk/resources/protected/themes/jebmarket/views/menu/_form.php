<?php
/* @var $this MenuController */
/* @var $model Menu */
/* @var $form CActiveForm */
?>
<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'menu-form',
    'enableAjaxValidation' => false,
    'htmlOptions' => array('class' => 'form-horizontal', 'role' => 'form')
));
?>
<div class="note bs-callout bs-callout-info">
    <p class="note">Fields with <span class="required">*</span> are required.</p>
</div>
<?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
<div class="form-group">
    <?php echo $form->labelEx($model, 'type', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php 
        echo $form->dropDownList($model, 'type', 
                array('select'=> 'Select a menu item type', 'page'=> 'Page', 'module'=> 'Module', 'custom'=> 'Custom'), 
                array(
                    'class' => 'form-control',
                    'ajax' => array (
                        'type'=> 'POST',
                        'url'=> $this->createUrl('menuItemOptions'),                         
                        'update'=> '#menuItemOptions',
                        'data'=> array('type'=>'js:$("#Menu_type").val()')                 
        )));
        ?>
        <?php echo $form->error($model, 'type', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'url', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10" id="menuItemOptions">
        <div class="alert alert-info" style="margin-bottom: 0">Select a 'Menu Item Type' from above to 'URL' see options</div>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'label', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'label', array('size' => 45, 'maxlength' => 45, 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'label', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'visibility', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->dropDownList($model,'visibility',array('auto'=>'Auto', 'public'=>'Public', 'private'=>'Private'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'visibility', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group rememberMe">
    <span class="col-lg-2"></span>
    <div class="col-lg-10">    
        <?php echo $form->checkBox($model, 'active', array('size' => 1, 'maxlength' => 1, 'checked' => 'checked')); ?>
        <?php echo $form->labelEx($model, 'active', array('class' => 'control-label')); ?>
        <?php echo $form->error($model, 'active', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'parent_id', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->dropDownList($model,'parent_id', CHtml::listData(Menu::model()->findAll(), 'id', 'label'), array('empty'=>'--SELECT--', 'class' => 'form-control')); ?>
        <?php echo $form->error($model, 'parent_id', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'odr', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->textField($model, 'odr', array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'odr', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group">
    <?php echo $form->labelEx($model, 'tag', array('class' => 'control-label col-lg-2')); ?>
    <div class="col-lg-10">
        <?php echo $form->dropDownList($model,'tag',array('mainmenu'=>'Main Menu', 'footermenu'=>'Footer Menu', 'topmenu'=>'Header Menu'), array('class' => 'form-control')); ?>
        <?php echo $form->error($model, 'tag', array('class' => 'text-danger control-hint')); ?>
    </div>
</div>
<div class="form-group buttons">
    <label class="control-label col-lg-2"></label>
    <div class="col-lg-10">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php $this->endWidget(); ?>