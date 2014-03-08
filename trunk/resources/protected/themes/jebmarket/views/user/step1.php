<div class="modal-header signup_step_head">
    <ul class="list-inline signup_step">
        <li class="active">
            <p class="glyphicon glyphicon-th blue"></p>
            <p class="step_name">1. Email Registration</p>
        </li>
        <li>
            <p class="glyphicon glyphicon-briefcase"></p>
            <p class="step_name">2. Initialize Business</p>
        </li>
        <li>
            <p class="glyphicon glyphicon-saved"></p>
            <p class="step_name">3. Select Template</p>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-control-wrapper sign" style="max-width: 570px; margin-bottom: 10px; padding-top: 10px; padding-right: 25px;">
            <h3 style="text-align: center; color: #ffffff; margin: 0 0 25px 0;">Register Your Email Address</h3>
            <?php $this->renderPartial('_signup_form_st1', array('model' => $model)); ?>
        </div>
    </div>
</div>