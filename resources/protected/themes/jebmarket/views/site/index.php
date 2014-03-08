<?php
/* Home Page Content */
$this->layout = 'main';
$this->pageTitle=Yii::app()->name . ' - '. $page->title;
$this->metaDescription = $page->meta_desc;
$this->metaKeywords = $page->meta_keywords;
?>
<div id="myCarousel" class="carousel slide">
            <div class="mini-signup-form-wrapper">
                <div class="mini-signup-form">
                    <a href="#" data-toggle="modal" data-target="#member_plan" class="btn btn-lg btn-success"> Start Your Online Business Now </a>
<!--                    <form class="form-inline" method="post" action="--><?php //echo Yii::app()->baseUrl.'/site/newstore' ?><!--" role="form">-->
<!--                        <div class="form-group">-->
<!--                            <label class="sr-only" for="store-name">Shop Name</label>-->
<!--                            <input name="store-name" type="text" class="form-control" id="store-name" placeholder="Shop Name">-->
<!--                        </div>-->
<!--                        <button type="button" id="mini-signup-button" class="btn btn-danger">Create Shop Now!</button>-->
<!--                        <button name="new-user" value="true" style="display: none" type="submit" id="mini-signup-new-user" class="btn btn-warning">New User ?</button>-->
<!--                        <button name="existing-user" value="true" style="display: none" type="submit" id="mini-signup-existing-user" class="btn btn-info">Existing User</button>-->
<!--                    </form>-->
                </div>
            </div>
    <ol class="carousel-indicators">
        <?php $slideIndex = 0; foreach ($slider as $slide) {  ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $slideIndex; ?>" class="<?php echo ($slideIndex == 0 )? 'active' : '' ?>"></li>
        <?php $slideIndex++; } ?>
    </ol>
    <div class="carousel-inner">
        <?php $slideIndex = 0; foreach ($slider as $slide) {  ?>
        <div class="item <?php echo $slide['class'] ?> <?php echo ($slideIndex == 0 )? 'active' : '' ?>"
             style="
                background: url(<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['sliderImageUrl'].$slide['image'] ?>) top center no-repeat;
                height: 670px;
                padding: 160px 0 0 0;
                background-position: 0 30px;
                /*border-bottom: 1px solid rgba(0,0,0,0.2);*/
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                margin: -110px 0 0;
                 ">
            <div class="container">
                <div class="row">
                    <div class="carousel-caption">
                        <h1><?php echo $slide['headline'] ?></h1>
                        <p><?php echo $slide['content'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php $slideIndex++; } ?>
    </div>
    <?php $slideIndex = 0; foreach ($slider as $slide) {  ?>
    <?php $slideIndex++; } ?>
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
</div>
<div style="background: #F2F6F7" id="business-plans">
<div class="container marketing">
    <?php echo $page->content ?>
</div>
</div>
<!-- Modal Price box -->
<div class="modal fade" id="member_plan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><b>Choose Your Online Business Membership Plan</b></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4 col-sm-4 price_box_left">
                        <div class="price_box1">
                            <h4><sup>$</sup>20<span>/month</span></h4>
                            <h5>Basic</h5>
                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Basic'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Now </a></h6>
                            <ul>
                                <li>Unlimited bandwidth</li>
                                <li>Unlimited products</li>
                                <li>1 GB File storage</li>
                                <li>2.0% Transaction fee</li>
                                <li>Discount code engine</li>
                                <li>24x7 Phone support</li>
                                <li><s>Gift cards</s></li>
                                <li><s>Abandoned cart recovery</s></li>
                                <li><s>Professional reports</s></li>
                                <li><s>Advanced report builder</s></li>
                                <li><s>Real-time carrier shipping</s></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 price_box_middle">
                        <div class="price_box3">
                            <p>Most Popular</p>
                            <h4><sup>$</sup>70<span>/month</span></h4>
                            <h5>Premium</h5>
                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Premium'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Now </a></h6>
                            <ul>
                                <li>Unlimited bandwidth</li>
                                <li>Unlimited products</li>
                                <li><span>5 GB</span> File storage</li>
                                <li><span>1.0%</span> Transaction fee</li>
                                <li>Discount code engine</li>
                                <li>24x7 Phone support</li>
                                <li>Gift cards</li>
                                <li>Abandoned cart recovery</li>
                                <li>Professional reports</li>
                                <li><s>Advanced report builder</s></li>
                                <li><s>Real-time carrier shipping</s></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-4 price_box_right">
                        <div class="price_box2">
                            <h4><sup>$</sup>170<span>/month</span></h4>
                            <h5>Executive</h5>
                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Executive'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Now </a></h6>
                            <ul>
                                <li>Unlimited bandwidth</li>
                                <li>Unlimited products</li>
                                <li><span>Unlimited</span> File storage</li>
                                <li><span>No</span> Transaction fee</li>
                                <li>Discount code engine</li>
                                <li>24x7 Phone support</li>
                                <li>Gift cards</li>
                                <li>Abandoned cart recovery</li>
                                <li>Professional reports</li>
                                <li>Advanced report builder</li>
                                <li>Real-time carrier shipping</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup_box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
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
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup_box2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header signup_step_head">
                <ul class="list-inline signup_step">
                    <li>
                        <p class="glyphicon glyphicon-th blue"></p>
                        <p class="step_name">1. Email Registration</p>
                    </li>
                    <li class="active">
                        <p class="glyphicon glyphicon-briefcase"></p>
                        <p class="step_name">2. Initialize Business</p>
                    </li>
                    <li>
                        <p class="glyphicon glyphicon-saved"></p>
                        <p class="step_name">3. Select Template</p>
                    </li>
                </ul>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup_box3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
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
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#myCarousel').carousel();
    $('#store-name').popover({
          placement: 'top',
          content: 'You\'ve a Shop name, Right?'
    });
    $('#mini-signup-button').click(function(ev){
        if($('#store-name').val() == "") {
            $('#store-name').popover('toggle');
        } else {
            $(this).hide('slow', function(){
            $('#mini-signup-new-user').show('slow');
            $('#mini-signup-existing-user').show('slow');
        });
        } 
    });
    $(".start_now").click(function() {
        $('#member_plan').modal('hide');
    });
});
</script>