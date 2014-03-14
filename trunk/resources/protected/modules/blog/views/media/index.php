<?php
Yii::app()->clientScript->scriptMap=array(
    'jquery.js'=>false,
);
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Insert Media</h4>
        </div>
        <div class="modal-body">
            <div class="model_cont">
                <?php $this->widget('zii.widgets.CListView', array(
                    'dataProvider'=>$dataProvider,
                    'itemView'=>'_view',
                )); ?>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-success postinsert">Insert into post</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<style>
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
<script>
    $(document).ready(function() {
        $(".postinsert").click(function(){
            CKEDITOR.instances.BlogPost_post_content.insertHtml("<img src=<?php echo Yii::app()->baseUrl."/".Yii::app()->params["uploadPath"].Yii::app()->user->id."/media/"; ?>"+$('input[name=mediaviewradio]:radio:checked').val()+">");
            $('#myModal').modal('hide');
        });
        $("input[name=mediaviewradio]").attr('checked','checked');
    })
</script>