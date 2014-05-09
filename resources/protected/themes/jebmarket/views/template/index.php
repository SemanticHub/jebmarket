<?php
/* @var $this TemplateController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="container">
    <div class="front_template">
        <h1 class="page-title">Template Store</h1>
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_view',
            'template'=>"{items}",
            'id'=>"front_template_list",
        )); ?>
    </div>
</div>
<div class="modal fade" id="template_views" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"></div>
    </div>
</div>
<script>
    $(".view_templates").live( "click", function() {
        $("#template_views").modal({
            remote : $(this).attr("data-url"),
            backdrop: "static",
            keyboard: false
        });
    });
    $(".cancel_single_model").live( "click", function() {
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
        $('#template_views').modal('hide');
    });
</script>