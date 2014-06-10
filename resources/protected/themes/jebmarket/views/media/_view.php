<div class="col-xs-2">
    <div href="#" class="thumbnail" style="overflow: hidden; background-color: #999">
        <img  src="<?php echo Yii::app()->homeUrl ?>/media/<?php echo Yii::app()->user->id ?>/<?php echo $data->url ?>" alt="">
        <div class="caption" style="font-size: 12px; padding: 5px 0">
            <?php echo CHtml::encode($data->caption); ?>
        </div>
        <a href="<?php echo Yii::app()->createUrl('/media/edit?id='.$data->id ); ?>" class="btn btn-sm btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span></a>
        <a href="<?php echo Yii::app()->createUrl('/media/delete?id='.$data->id ); ?>" class="btn btn-sm btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span></a>
    </div>
	<!--<b><?php /*echo CHtml::encode($data->getAttributeLabel('id')); */?>:</b>
	<?php /*echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('caption')); */?>:</b>
	<?php /*echo CHtml::encode($data->caption); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('alternative_text')); */?>:</b>
	<?php /*echo CHtml::encode($data->alternative_text); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('description')); */?>:</b>
	<?php /*echo CHtml::encode($data->description); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('url')); */?>:</b>
	<?php /*echo CHtml::encode($data->url); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('upload_date')); */?>:</b>
	<?php /*echo CHtml::encode($data->upload_date); */?>
	<br />

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('modified_date')); */?>:</b>
	<?php /*echo CHtml::encode($data->modified_date); */?>
	<br />-->
</div>