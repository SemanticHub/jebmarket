<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/icon/favicon.png">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css">
        <title><?php echo Yii::t('phrase', CHtml::encode($this->pageTitle)); ?></title>
    </head>

    <body>
        <div class="navbar-wrapper">
            <div class="container">

                <div class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.png" height="46px">
                            <?php //echo Yii::t('phrase', CHtml::encode(Yii::app()->name)); ?></a>
                        </div>
                        <div class="navbar-collapse collapse">
                             <ul class="nav navbar-nav">
                                <li><a href="#about">Real Time Marketplace</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Benefits <b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Shoppers</a></li>
                                    <li><a href="#">Business Owners</a></li>
                                  </ul>
                                </li>
                                 <li><a href="#contact">Pricing</a></li>
                                 <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Helpdesk <b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">FAQ</a></li>
                                    <li><a href="#">24x7 Support</a></li>
                                  </ul>
                                </li>
                                 <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Company <b class="caret"></b></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                  </ul>
                                </li>
                                 <li><a href="#contact">Login/Register</a></li>
                              </ul>
                            <?php
                            // $this->widget('zii.widgets.CMenu', array(
                            //     'htmlOptions' => array('class'=>'nav navbar-nav'),
                            //     'items' => array(
                            //         array('label' => Yii::t('phrase', 'Home'), 'url' => array('/site/index')),
                            //         array('label' => Yii::t('phrase', 'About'), 'url' => array('/site/page', 'view' => 'about')),
                            //         array('label' => Yii::t('phrase', 'Contact'), 'url' => array('/site/contact')),
                            //         array('label' => Yii::t('phrase', 'Login'), 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                            //         array('label' => Yii::t('phrase', 'Logout').' (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                            //     ),
                            // ));
                            ?>                            
                        </div>
                    </div>
                </div>

            </div>
        </div>


       <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
    
      <span id="store_form">
      <form class="form-inline" role="form" autocomplete="off">
      <div class="form-group col-md-4">
          <label class="sr-only" for="store">Store Name</label>
          <input type="text" class="form-control" id="store" placeholder="Store Name">
        </div>
        <div class="form-group">
          <label class="sr-only" for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label class="sr-only" for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Password">
        </div>

        <button name="submit" type="submit" class="btn btn-default store_button">Create Store Now</button>
      </form>
      </span>

        <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->
      <div class="carousel-inner">
       
        <div class="item active">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slides/slide-1.png" alt="First slide" style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Real time Marketplace</h1>
              <p>Both for buyers and sellers</p>
            </div>
          </div>
        </div>

        <div class="item">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slides/slide-2.png" alt="Second slide" style="height: 500px; width: 100%; display: block;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Everything you need to sell online</h1>
              <p>Turnkey solution to start selling immediately</p>
            </div>
          </div>
        </div>

      </div>
     <!--  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> -->
    </div><!-- /.carousel -->


        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
                     <h2>Create your own website and start selling in minutes</h2>
                      <ul>
                      <li>Launch your business online with a custom website</li>
                      <li>Sell your products and services in the World’s largest real time market</li>
                      <li>No more hassles of hiring a developer, registering a domain name etc.</li>
                      <li>Reduced time, effort and cost on marketing</li>
                      <li>Seamless offline to online ecommerce experience</li>
                      <li>Search engine optimized content</li>
                      </ul> 
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
                     <h2>Detailed analytics of your website</h2>
                      <ul>
                      <li>Get detailed statistics of your website with tips for better performance</li>
                      <li>Understand which parts of your website are performing well and why the others are not performing so well</li>
                      <li>Find out how many users you are attracting and how they are engaging with your site</li>
                      <li>Get details of how visitors arrived on your site, their geographies and how they like to use your site</li>
                      <li>Understand your consumer, his needs and make your website more user friendly</li>
                      </ul>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
                    <h2>Real time calling, text messages and chat</h2>
                      <ul>
                      <li>Remove the barriers of space and time</li>
                      <li>Connect with buyers/sellers across the World in real time</li>
                      <li>State of the art live chat with real time monitoring</li>
                      <li>Makes shopping as real as a physical market</li>
                      </ul>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-3">
                    <img class="img-circle" src="data:image/png;base64," data-src="holder.js/140x140" alt="Generic placeholder image">
                    <h2>Support Services</h2>
                      <ul>
                      <li>Strong dispute resolution team to resolve issues in case of any mismatched expectations with the delivery of product or service</li>       
                      <li>24 X 7 Helpdesk to assist you with all your queries</li>
                      <li>Customer service agents to guide you with requirements like payment gateway setup, shipping tie-ups, etc.</li>
                      <li>Enhanced seller experience</li>
                      </ul>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->


            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>

        </div><!-- /.container -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/html5shiv.js"></script>
          <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/respond.min.js"></script>
        <![endif]-->
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/holder.js"></script>
        
    </body>
</html>
