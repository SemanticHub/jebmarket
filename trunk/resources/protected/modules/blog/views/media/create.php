<style>
    .sidebar, .dash_second_menu{
        display: none;
    }
    .dashboard .dash_content_body {
        margin-top: 0;
    }
    .dashboard .col-md-10 {
        width: 100%;
    }
    .media_view img{
        height: 65px;
    }
    .media_view{
        height: 65px;
        width: 100px;
        margin: 0 7px 30px 0;
        padding: 0;
        float: left;
    }
    .img-thumbnail:hover{
        background-color: #BC89EB;
    }
    .model_cont{
        margin: 0;
        padding: 0;
        width: 100%;
        float: left;
    }
    .media_view .radio_v{
        margin: 0 0 0 42px;
        padding: 0;
        float: left;
    }
</style>
<?php
$this->menu = Yii::app()->params['usermenu'];
$this->menu['media']['active'] = true;
?>
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
                                    $.fn.yiiListView.update('listviewsf');
                                }",
            )
        ));
    ?>
</div>
<div class="container">
    <div class="row">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
            'id' => 'listviewsf',
        )); ?>
    </div>
    <div class="row">
        <button type="button" class="btn btn-default dismisss">Close</button>
        <button type="button" class="btn btn-success postinsert">Add This Image</button>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".postinsert").click(function(){
            $(".cke_dialog input[type='text']:visible:first", window.opener.document).val("<?php echo Yii::app()->getBaseUrl(true)."/".Yii::app()->params["uploadPath"].Yii::app()->user->id."/media/"; ?>"+$('input[name=mediaviewradio]:radio:checked').val());
            window.close();
        });
        $(".dismisss").click(function(){
            window.close();
        });
        $("input[name=mediaviewradio]").attr('checked','checked');
    })
</script>