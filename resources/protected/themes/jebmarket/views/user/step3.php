<div class="modal-header signup_step_head">
    <ul class="list-inline signup_step">
        <li>
            <p class="glyphicon glyphicon-th blue"></p>
            <p class="step_name">1. Email Registration</p>
        </li>
        <li>
            <p class="glyphicon glyphicon-briefcase"></p>
            <p class="step_name">2. Initialize Business</p>
        </li>
        <li class="active">
            <p class="glyphicon glyphicon-saved"></p>
            <p class="step_name">3. Select Template</p>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <h3 style="text-align: center; color: #ffffff; margin: 0 0 25px 0;">Select A Template To Get Started</h3>
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider,
            'itemView'=>'_template_view',
            'template'=>"{items}",
            'id'=>"signup_template_list",
        )); ?>
    </div>
</div>
<div class="modal fade" id="template_views" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"></div>
    </div>
</div>
<script>
    $("#signup_template_list .thumbnail").live( "click", function() {
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