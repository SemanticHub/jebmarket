<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['logo']['active'] = true;
?>
<div class="row">
        <h1 class="page-title">Website Logo</h1>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-info avater_image" style="min-height: 159px;">
            <div class="panel-heading"><span class="glyphicon glyphicon-picture"></span> Upload Logo</div>
            <img id='avater_image' src="<?php echo $model->logo ? Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].Yii::app()->user->id.'/logo/'.$model->logo : Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].'jebmarket_logo.png'; ?>" alt="" />
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
    </div>
    <div class="col-lg-6">
        <div class="panel panel-info" style="min-height: 159px;">
            <div class="panel-heading"><span class="glyphicon glyphicon-picture"></span> Upload Favicon</div>
            <img id='website_favicon' src="<?php echo $model->favicon ? Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].Yii::app()->user->id.'/logo/'.$model->favicon : Yii::app()->baseUrl.'/'.Yii::app()->params['uploadPath'].'favicon.ico'; ?>" alt="" />
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