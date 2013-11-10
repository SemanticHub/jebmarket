<div class="well well-sm">
    <?php $form = $this->beginWidget('CActiveForm', array(
        'htmlOptions' => array('class' => 'form-inline', 'role' => 'form'),
        'action' => Yii::app()->createUrl($this->route),
        'method' => 'get',
    )); ?>
    <div class="form-group">
        <?php echo $form->label($model, 'name', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model, 'name', array('placeholder' => Location::model()->getAttributeLabel('name'), 'class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'code', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model, 'code', array('placeholder' => Location::model()->getAttributeLabel('code'), 'class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'dial_code', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model, 'dial_code', array('placeholder' => Location::model()->getAttributeLabel('dial_code'), 'class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'area', array('class'=>'sr-only')); ?>
        <?php echo $form->textField($model, 'area', array('placeholder' => Location::model()->getAttributeLabel('area'), 'class' => 'form-control')); ?>
    </div>
    <div class="form-group">
        <?php echo $form->label($model, 'location_level_id', array('class'=>'sr-only')); ?>
        <?php //echo $form->textField($model, 'location_level_id', array('placeholder' => Location::model()->getAttributeLabel('location_level_id'), 'class' => 'form-control')); ?>
        <?php echo $form->dropDownList($model,'location_level_id', CHtml::listData(LocationLevel::model()->findAll(array('order'=>'name')), 'id', 'name'), array('empty'=>'--SELECT--', 'placeholder' => LocationLevel::model()->getAttributeLabel('location_level_id'), 'class' => 'form-control')); ?>
    </div>
    <div class="form-group buttons">
        <?php echo CHtml::submitButton('Search', array('class' => 'btn btn-sm btn-primary')); ?>
    </div>
    <?php $this->endWidget(); ?>
</div>