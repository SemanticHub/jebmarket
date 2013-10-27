<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'city-form',
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'focus' => 'input[type="text"]:first',
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    )
)); ?>
    <div class="note bs-callout bs-callout-info">
        <p class="note">Fields with <span class="required">*</span> are required.</p>
    </div>
<?php echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger')); ?>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'country_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->dropDownList(
                $model,
                'country_id',
                CHtml::listData(
                    Country::model()->findAll(), 'id', 'name'),
                    array(
                        'empty'=>'--SELECT A COUNTRY--',
                        'class' => 'form-control',
                        'ajax' => array (
                            'type'=> 'POST',
                            'url'=> $this->createUrl('states'),
                            'update'=> '#states',
                            'data'=> array('country_id'=>'js:$("#City_country_id").val()')
                        )
                    )
            );
            ?>
            <?php echo $form->error($model, 'country_id', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'state_id', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10" id="states">
            <div class="alert alert-info" style="margin-bottom: 0;">Select a Country</div>
        </div>
    </div>
    <div class="form-group">
        <?php echo $form->labelEx($model, 'name', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'name', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'name', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'code', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'code', array('size' => 4, 'maxlength' => 4, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'code', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->labelEx($model, 'area', array('class' => 'control-label col-lg-2')); ?>
        <div class="col-lg-10">
            <?php echo $form->textField($model, 'area', array('size' => 10, 'maxlength' => 10, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'area', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>

    <div class="form-group buttons">
        <label class="control-label col-lg-2"></label>

        <div class="col-lg-10">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
        </div>
    </div>

<?php $this->endWidget(); ?>