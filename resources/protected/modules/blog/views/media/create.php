<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['media']['active'] = true;
?>
    <div class="row">
        <div class="col-md-6">
            <h1 class="page-title">Create Media</h1>
        </div>
        <div class="col-md-6">
            <div class="right_top_menu">
                <ul class="list-inline">
                    <li>
                        <?php echo CHtml::link('Manage Media',array('admin'), array('class'=>'btn btn-success')); ?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<div class="media_upload">
    <?php
    $this->widget('ext.JebUpload.JebUpload',
        array(
            'id'=>'uploadFile',
            'config'=>array(
                'action'=>Yii::app()->createUrl('blog/media/uploadmedia'),
                'allowedExtensions'=>array("jpg", "jpeg", "gif", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
                'sizeLimit'=>Yii::app()->params['sliderfilesizemax'],
                'minSizeLimit'=>Yii::app()->params['sliderfilesizemin'],
                'multiple'=>true,
                'onSubmit'=>"js:function(file, extension) {
                                    $('div.preview').addClass('loading');
                                  }",
                'onComplete'=>"js:function(file, response, responseJSON) {
                                    $('.alert-success:last').prepend('<img style=margin:0; src=".Yii::app()->baseUrl."/".Yii::app()->params['uploadPath'].Yii::app()->user->id."/media/'+responseJSON['filename']+'>');
                                }",
            )
        ));
    ?>
</div>