<?php
/* Home Page Content */
$this->layout = 'main';
$this->pageTitle=Yii::app()->name . ' - '. $page->title;
$this->metaDescription = $page->meta_desc;
$this->metaKeywords = $page->meta_keywords;
?>
<div class="container">
<div id="myCarousel" class="carousel slide">
    <div class="mini-signup-form-wrapper">
        <div class="mini-signup-form">
            <form class="form-inline" method="post" action="<?php echo Yii::app()->baseUrl.'/site/newstore' ?>" role="form">
                <div class="form-group">
                    <label class="sr-only" for="store-name">Shop Name</label>
                    <input name="store-name" type="text" class="form-control" id="store-name" placeholder="Store Name">
                </div>
                <button type="button" id="mini-signup-button" class="btn btn-danger btn-lg">Create Shop Now!</button>
                <button name="new-user" value="true" style="display: none" type="submit" id="mini-signup-new-user" class="btn btn-warning">New User ?</button>
                <button name="existing-user" value="true" style="display: none" type="submit" id="mini-signup-existing-user" class="btn btn-info">Existing User</button>
            </form>
        </div>
    </div>    
    <ol class="carousel-indicators">
        <?php $slideIndex = 0; foreach ($slider as $slide) {  ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $slideIndex; ?>" class="<?php echo ($slideIndex == 0 )? 'active' : '' ?>"></li>
        <?php $slideIndex++; } ?>
    </ol>
    <div class="carousel-inner">
        <?php $slideIndex = 0; foreach ($slider as $slide) {  ?>
        <div class="item <?php echo $slide['class'] ?> <?php echo ($slideIndex == 0 )? 'active' : '' ?>">
            <img src="<?php echo Yii::app()->baseUrl.'/'.Yii::app()->params['uploadUrl'].$slide['image'] ?>"  alt="<?php echo $slide['headline']; ?>">
            <div class="container">
                <div class="carousel-caption">
                    <h1><?php echo $slide['headline'] ?></h1>
                    <p><?php echo $slide['content'] ?></p>
                </div>
            </div>
        </div>
        <?php $slideIndex++; } ?>        
    </div>
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>-->
</div>
</div>
<div class="container marketing">    
    <?php echo $page->content ?>
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
});
</script>