<?php
$this->pageHeader = "Website Settings";
?>
<?php if (Yii::app()->user->hasFlash('success')){ ?>
<div class="alert alert-success" style="margin: 0 0 20px 0;">
    <?php echo Yii::app()->user->getFlash('success'); ?>
</div>
<?php } ?>
<div class="website_settings">
    <div class="col-md-8">
        <div class="panel panel-info" style="min-height: 159px;">
            <div class="panel-heading"><span class="glyphicon glyphicon-cog"></span> Basic Information</div>
            <?php $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-info avater_image" style="min-height: 159px;">
            <div class="panel-heading"><span class="glyphicon glyphicon-picture"></span> Upload Logo</div>
            <img id='avater_image' src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].Yii::app()->user->id.'/logo/'.$model->logo; ?>" alt="" />
            <?php
            $this->widget('ext.JebUpload.JebUpload',
                array(
                    'id'=>'uploadFile',
                    'config'=>array(
                        'action'=>Yii::app()->createUrl('website/Uploadlogo'),
                        'allowedExtensions'=>array("jpg", "jpeg", "gif", "png"),//array("jpg","jpeg","gif","exe","mov" and etc...
                        'sizeLimit'=>Yii::app()->params['profileimagesizemax'],
                        'minSizeLimit'=>Yii::app()->params['profileimagesizemin'],
                        'multiple'=>false,
                        'onSubmit'=>"js:function(file, extension) {
                                    $('div.preview').addClass('loading');
                                  }",
                        'onComplete'=>"js:function(file, response, responseJSON) {
                                  $('#avater_image').load(function(){
                                    $('div.preview').removeClass('loading');
                                    $('#avater_image').unbind();
                                    $('#Associazioni_logo').val(responseJSON['filename']);
                                    $('.qq-uploader .alert-success').alert('close');
                                  });
                                  $('#avater_image').attr('src', '".Yii::app()->baseUrl."/".Yii::app()->params['uploadPath'].Yii::app()->user->id."/logo/'+responseJSON['filename']);
                                }",
                    )
                ));
            ?>
        </div>
        <div class="panel panel-info" style="min-height: 159px;">
            <div class="panel-heading"><span class="glyphicon glyphicon-picture"></span> Upload Favicon</div>
            <img id='website_favicon' src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].Yii::app()->user->id.'/logo/'.$model->favicon; ?>" alt="" />
            <?php
            $this->widget('ext.JebUpload.JebUpload',
                array(
                    'id'=>'uploadFavicon',
                    'config'=>array(
                        'action'=>Yii::app()->createUrl('website/UploadFavicon'),
                        'allowedExtensions'=>array("ico"),//array("jpg","jpeg","gif","exe","mov" and etc...
                        'sizeLimit'=>Yii::app()->params['profileimagesizemax'],
                        'minSizeLimit'=>Yii::app()->params['profileimagesizemin'],
                        'multiple'=>false,
                        'onSubmit'=>"js:function(file, extension) {
                                    $('div.preview').addClass('loading');
                                  }",
                        'onComplete'=>"js:function(file, response, responseJSON) {
                                  $('#website_favicon').load(function(){
                                    $('div.preview').removeClass('loading');
                                    $('#website_favicon').unbind();
                                    $('#Associazioni_logo').val(responseJSON['filename']);
                                    $('.qq-uploader .alert-success').alert('close');
                                  });
                                  $('#website_favicon').attr('src', '".Yii::app()->baseUrl."/".Yii::app()->params['uploadPath'].Yii::app()->user->id."/logo/'+responseJSON['filename']);
                                }",
                    )
                ));
            ?>
        </div>
    </div>
</div>