<div class="modal fade page_saved">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <p style="color: #000000;">Page Saved Successfully.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>
<div class="sidebar-nav">
    <div class="edit_left_header">
        <a href="#" class="btn btn-sm btn-primary btn-block" onclick="save()" id="save_custom"><i class="glyphicon glyphicon-save"></i> Save</a>
        <a href="#" id="desktop_view"></a>
        <a href="#" id="tablet_view"></a>
        <a href="#" id="mobile_view"></a>
        <a href="#" id="page_clear" class="btn btn-danger btn-block btn-xs"><span class="glyphicon glyphicon-trash"></span> Clear Page</a>
    </div>
    <div class="edit_left_component">
        <div class="component_firstico">
            <span class="glyphicon glyphicon-plus list_com"></span>
            <span class="glyphicon glyphicon-cog list_sittings"></span>
        </div>
        <div class="colponent_list_pop">
            <p class="colponent_list_header">Add</p>
            <span class="glyphicon glyphicon-remove colponent_list_remove"></span>

            <div class="colponent_list">
            <?php if(Yii::app()->user->checkAccess(Rights::module()->superuserName)){ ?>
            <ul class="nav nav-list accordion-group">
                <div class="component_header">
                    <p>Admin Component</p>
                </div>
                <li class="boxes" id="elmBase">
                    <div class="box box-element">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        <span class="drag label label-default"><span class="glyphicon glyphicon-user component_img"></span></span>
                        <div class="preview">Start Business</div>
                        <div class="view">
                            <div class="editable">
                                <div id="com32">
                                    <a href="#" data-toggle="modal" data-target="#member_plan" class="btn btn-lg btn-success member_plansa"> Start Your Online Business Now </a>
                                </div>
                            </div>
                            <div class="modal fade" id="member_plan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" contenteditable="true"><b>Choose Your Online Business Membership Plan</b></h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                                $pages = Pages::model()->findByAttributes(array('slug' => 'plans'));
                                                echo $pages->content;
                                            ?>
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
                                    $(".start_now").click(function() {
                                        $('#member_plan').modal('hide');
                                    });
                                    $(".member_plans").click(function() {
                                        $('#member_plan').modal('show');
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="box box-element">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        <span class="drag label label-default"><span class="glyphicon glyphicon-user component_img"></span></span>
                        <div class="preview">Start Free Trial</div>
                        <div class="view">
                            <div class="editable">
                                <div id="com33">
                                    <div class="col-lg-4 col-sm-4 price_box_left">
                                        <div class="price_box1" contenteditable="true">
                                            <h4><sup>$</sup>20<span>/month</span></h4>
                                            <h5>Basic</h5>
                                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Basic'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Your Free Trial </a></h6>
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
                                        <div class="price_box3" contenteditable="true">
                                            <p>Most Popular</p>
                                            <h4><sup>$</sup>70<span>/month</span></h4>
                                            <h5>Premium</h5>
                                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Premium'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Your Free Trial </a></h6>
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
                                        <div class="price_box2" contenteditable="true">
                                            <h4><sup>$</sup>170<span>/month</span></h4>
                                            <h5>Executive</h5>
                                            <h6><a href="<?php echo Yii::app()->baseUrl.'/user/step1?name=Executive'; ?>" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#signup_box" class="btn btn-primary btn-block start_now"> Start Your Free Trial </a></h6>
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
                                        $(".start_now").click(function() {
                                            $('#member_plan').modal('hide');
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <?php } ?>
                <ul class="nav nav-list accordion-group">
                <div class="component_header">
                    <p>Basic Component</p>
                </div>
                <li class="boxes" id="elmBase">
                <div class="box box-element">
                    <div class="lyrow">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon-remove glyphicon"></i></a>
                        <span class="drag label label-default"><span class="glyphicon glyphicon-th-large component_img"></span></span>
                        <div class="btn-group grid_button" role="toolbar">
                            <span class="label label-primary">Select Columns</span>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="1">1</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="2">2</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="3">3</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="4">4</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="5">5</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="6">6</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="7">7</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="8">8</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="9">9</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="10">10</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="11">11</button>
                            <button type="button" class="btn btn-xs btn-default grid" data-val="12">12</button>
                        </div>
                        <div class="preview">Columns</div>
                        <div class="view">
                            <div class="row clearfix">
                                <div class="col-md-6 column"></div>
                                <div class="col-md-6 column"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Align <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="text-left">Left</a></li>
                    <li class="" ><a href="#" rel="text-center">Center</a></li>
                    <li class="" ><a href="#" rel="text-right">Right</a></li>
                </ul>
            </span>
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Emphasis <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="text-muted">Muted</a></li>
                    <li class="" ><a href="#" rel="text-primary">Primary</a></li>
                    <li class="" ><a href="#" rel="text-success">Success</a></li>
                    <li class="" ><a href="#" rel="text-info">Info</a></li>
                    <li class="" ><a href="#" rel="text-warning">Warning</a></li>
                    <li class="" ><a href="#" rel="text-danger">Danger</a></li>
                </ul>
            </span>
                </span>
                    <div class="preview">Title</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com1">
                                <h3>h3. Lorem ipsum dolor sit amet.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Align <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="text-left">Left</a></li>
                    <li class="" ><a href="#" rel="text-center">Center</a></li>
                    <li class="" ><a href="#" rel="text-right">Right</a></li>
                </ul>
            </span>
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Emphasis <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="text-muted">Muted</a></li>
                    <li class="" ><a href="#" rel="text-primary">Primary</a></li>
                    <li class="" ><a href="#" rel="text-success">Success</a></li>
                    <li class="" ><a href="#" rel="text-info">Info</a></li>
                    <li class="" ><a href="#" rel="text-warning">Warning</a></li>
                    <li class="" ><a href="#" rel="text-danger">Danger</a></li>
                </ul>
            </span>

                    <a class="btn btn-xs btn-default" href="#" rel="lead">Lead</a>
                </span>
                    <div class="preview">Paragraph</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com2">
                                <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu. </small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                    <div class="preview">Address</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com3">
                                <address>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="pull-right">Pull right</a>
                </span>
                    <div class="preview">Blockquote</div>
                    <div class="view clearfix">
                        <div class="editable">
                            <div id="com4">
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="list-unstyled">Unstyled</a>
                    <a class="btn btn-xs btn-default" href="#" rel="list-inline">Inline</a>
                </span>
                    <div class="preview">Unordered List</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com5">
                                <ul>
                                    <li>Lorem ipsum dolor sit amet</li>
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="list-unstyled">Unstyled</a>
                    <a class="btn btn-xs btn-default" href="#" rel="list-inline">Inline</a>
                </span>
                    <div class="preview">Ordered List</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com6">
                                <ol>
                                    <li>Lorem ipsum dolor sit amet</li>;
                                    <li>Consectetur adipiscing elit</li>
                                    <li>Integer molestie lorem at massa</li>
                                    <li>Facilisis in pretium nisl aliquet</li>
                                    <li>Nulla volutpat aliquam velit</li>
                                    <li>Faucibus porta lacus fringilla vel</li>
                                    <li>Aenean sit amet erat nunc</li>
                                    <li>Eget porttitor lorem</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="dl-horizontal">Horizontal</a>
                </span>
                    <div class="preview">Description</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com7">
                                <dl>
                                    <dt>Description lists</dt>
                                    <dd>A description list is perfect for defining terms.</dd>
                                    <dt>Euismod</dt>
                                    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                    <dt>Malesuada porta</dt>
                                    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                    <dt>Felis euismod semper eget lacinia</dt>
                                    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-th component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Style <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="table-striped">Striped</a></li>
                    <li class="" ><a href="#" rel="table-bordered">Bordered</a></li>
                </ul>
            </span>
                    <a class="btn btn-xs btn-default" href="#" rel="table-hover">Hover</a>
                    <a class="btn btn-xs btn-default" href="#" rel="table-condensed">Condensed</a>
                </span>
                    <div class="preview">Table</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com8">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Payment Taken</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>TB - Monthly</td>
                                        <td>01/04/2012</td>
                                        <td>Default</td>
                                    </tr>
                                    <tr class="active">
                                        <td>1</td>
                                        <td>TB - Monthly</td>
                                        <td>01/04/2012</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr class="success">
                                        <td>2</td>
                                        <td>TB - Monthly</td>
                                        <td>02/04/2012</td>
                                        <td>Declined</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>3</td>
                                        <td>TB - Monthly</td>
                                        <td>03/04/2012</td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>4</td>
                                        <td>TB - Monthly</td>
                                        <td>04/04/2012</td>
                                        <td>Call in to confirm</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-file component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="form-inline">Inline</a>
                </span>
                    <div class="preview">Contact Form</div>
                    <div class="view">
                        <div class="editable>
                            <div id="com9">
                        <?php
                        $form = $this->beginWidget('CActiveForm', array(
                            'id' => 'contact-form',
                            'action' => Yii::app()->createUrl('/site/contact'),
                            'htmlOptions' => array(
                                'class' => 'form-horizontal',
                                'role' => 'form'
                            )
                        ));
                        ?>
                        <?php echo $form->errorSummary($contact, '', '', array('class' => 'alert alert-danger')); ?>
                        <div class="form-group">
                            <?php echo $form->labelEx($contact, 'name'); ?>
                            <?php echo $form->textField($contact, 'name', array('maxlength' => 80, 'class' => 'form-control')); ?>
                            <?php echo $form->error($contact, 'name', array('class' => 'text-danger control-hint')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($contact, 'email'); ?>
                            <?php echo $form->textField($contact, 'email', array('maxlength' => 80, 'class' => 'form-control')); ?>
                            <?php echo $form->error($contact, 'email', array('class' => 'text-danger control-hint')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($contact, 'subject'); ?>
                            <?php echo $form->textField($contact, 'subject', array('maxlength' => 255, 'class' => 'form-control')); ?>
                            <?php echo $form->error($contact, 'subject', array('class' => 'text-danger control-hint')); ?>
                        </div>
                        <div class="form-group">
                            <?php echo $form->labelEx($contact, 'body'); ?>
                            <?php echo $form->textArea($contact, 'body', array('form-groups' => 6, 'rows' => 5, 'cols' => 50, 'class' => 'form-control')); ?>
                            <?php echo $form->error($contact, 'body', array('class' => 'text-danger control-hint')); ?>
                        </div>
                        <?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
                        <?php $this->endWidget(); ?>
                            </div>
                        </div>
                    </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-unchecked component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="btn-default">Default</a></li>
                    <li class="" ><a href="#" rel="btn-primary">Primary</a></li>
                    <li class="" ><a href="#" rel="btn-success">Success</a></li>
                    <li class="" ><a href="#" rel="btn-info">Info</a></li>
                    <li class="" ><a href="#" rel="btn-warning">Warning</a></li>
                    <li class="" ><a href="#" rel="btn-danger">Danger</a></li>
                    <li class="" ><a href="#" rel="btn-link">Link</a></li>
                </ul>
            </span>
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Size <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="btn-lg">Large</a></li>
                    <li class="" ><a href="#" rel="btn-default">Default</a></li>
                    <li class="" ><a href="#" rel="btn-sm">Small</a></li>
                    <li class="" ><a href="#" rel="btn-xs">Mini</a></li>
                </ul>
            </span>

                    <a class="btn btn-xs btn-default" href="#" rel="btn-block">Block</a>
                    <a class="btn btn-xs btn-default" href="#" rel="active">Active</a>
                    <a class="btn btn-xs btn-default" href="#" rel="disabled">Disabled</a>
                </span>
                    <div class="preview">Button</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com10">
                                <button type="button" class="btn btn-default">Default</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-unchecked component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="btn-default">Default</a></li>
                    <li class="" ><a href="#" rel="btn-primary">Primary</a></li>
                    <li class="" ><a href="#" rel="btn-success">Success</a></li>
                    <li class="" ><a href="#" rel="btn-info">Info</a></li>
                    <li class="" ><a href="#" rel="btn-warning">Warning</a></li>
                    <li class="" ><a href="#" rel="btn-danger">Danger</a></li>
                    <li class="" ><a href="#" rel="btn-link">Link</a></li>
                </ul>
            </span>
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Size <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="btn-lg">Large</a></li>
                    <li class="" ><a href="#" rel="btn-default">Default</a></li>
                    <li class="" ><a href="#" rel="btn-sm">Small</a></li>
                    <li class="" ><a href="#" rel="btn-xs">Mini</a></li>
                </ul>
            </span>

                    <a class="btn btn-xs btn-default" href="#" rel="btn-block">Block</a>
                    <a class="btn btn-xs btn-default" href="#" rel="active">Active</a>
                    <a class="btn btn-xs btn-default" href="#" rel="disabled">Disabled</a>
                </span>
                    <div class="preview">Anchor Button</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com11">
                                <a href="#" class="btn" type="button">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-picture component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="img-rounded">Rounded</a></li>
                    <li class="" ><a href="#" rel="img-circle">Circle</a></li>
                    <li class="" ><a href="#" rel="img-thumbnail">Thumbnail</a></li>
                </ul>
            </span>
                </span>
                    <div class="preview">Image</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com12">
                                <img alt="140x140" src="http://lorempixel.com/140/140/">
                            </div>
                        </div>
                    </div>
                </div>
                </li>
                </ul>
                <ul class="nav nav-list accordion-group">
                <div class="component_header">
                    <p>Group Component</p>
                </div>
                <li class="boxes" id="elmComponents">
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-unchecked component_img"></span></span>
              <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Size <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="btn-group-lg">Large</a></li>
                    <li class="" ><a href="#" rel="btn-group-md">Medium</a></li>
                    <li class="" ><a href="#" rel="btn-group-sm">Small</a></li>
                    <li class="" ><a href="#" rel="btn-group-xs">Extra small</a></li>
                </ul>
            </span>
                <a class="btn btn-xs btn-default" href="#" rel="btn-group-vertical">Vertical</a>
              </span>
                    <div class="preview">Button Group</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com13">
                                <div class="btn-group">
                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-align-left"></i> Left</button>
                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-align-center"></i> Center</button>
                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-align-right"></i> Right</button>
                                    <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-align-justify"></i> Justify</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-unchecked component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="dropup">Dropup</a>
                </span>
                    <div class="preview">Button Dropdowns</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com14">
                                <div class="btn-group">
                                    <button class="btn btn-default" contenteditable="true">Action</button>
                                    <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
                                    <ul class="dropdown-menu" contenteditable="true">
                                        <li><a href="#">Action</a></li>
                                        <li class="disabled"><a href="#">Another action</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-list component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="nav-tabs">Default</a></li>
                    <li class="" ><a href="#" rel="nav-pills">Pills</a></li>
                </ul>
            </span>
                    <a class="btn btn-xs btn-default" href="#" rel="nav-stacked">Stacked</a>
                </span>
                    <div class="preview">Navs</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com15">
                                <ul class="nav nav-tabs" contenteditable="true">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li class="disabled"><a href="#">Messages</a></li>
                                    <li class="dropdown pull-right">
                                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-list component_img"></span></span>
                    <div class="preview">Breadcrumb</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com16">
                                <ul class="breadcrumb">
                                    <li><a href="#" contenteditable="true">Home</a> <span class="divider">/</span></li>
                                    <li><a href="#" contenteditable="true">Library</a> <span class="divider">/</span></li>
                                    <li class="active" contenteditable="true">Data</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-list component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Size <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="pagination-lg">Large</a></li>
                    <li class="active" ><a href="#" rel="">Medium</a></li>
                    <li class="" ><a href="#" rel="pagination-sm">Small</a></li>
                </ul>
            </span>

                        </span>
                    <div class="preview">Pagination</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com17">
                                <ul class="pagination editable" contenteditable="true">
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-header component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="label-default">Default</a></li>
                    <li class="" ><a href="#" rel="label-primary">Primary</a></li>
                    <li class="" ><a href="#" rel="label-success">Success</a></li>
                    <li class="" ><a href="#" rel="label-info">Info</a></li>
                    <li class="" ><a href="#" rel="label-warning">Warning</a></li>
                    <li class="" ><a href="#" rel="label-danger">Danger</a></li>
                </ul>
            </span>
                </span>
                    <div class="preview">Label</div>
                    <div class="view">
                        <span class="label label-default editable" contenteditable="true">Label</span>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-header component_img"></span></span>
                <span class="configuration">
                </span>
                    <div class="preview">Badge</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com18">
                                <ul class="nav nav-pills" contenteditable="true">
                                    <li class="active">
                                        <a href="#">
                                            <span class="badge pull-right">42</span>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge pull-right">16</span>
                                            More
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-header component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="well">Well</a>
                </span>
                    <div class="preview">Jumbotron</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com19">
                                <div class="jumbotron">
                                    <h1>Hello, world!</h1>
                                    <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                                    <p><a class="btn btn-primary btn-large" href="#">Learn more</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-header component_img"></span></span>
                    <div class="preview">Page Header</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com20">
                                <div class="page-header">
                                    <h1 contenteditable="true">Example page header <small>Subtext for header</small></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-text-width component_img"></span></span>
                    <div class="preview">Text</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com21">
                                <h2 contenteditable="true">Heading</h2>
                                <p contenteditable="true">Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
                                <p><a class="btn" href="#" contenteditable="true">View details &raquo;</a></p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-picture component_img"></span></span>
                    <div class="preview">Thumbnails</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com22">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="300x200" src="http://lorempixel.com/600/200/people">
                                        <div class="caption" contenteditable="true">
                                            <h3>Thumbnail label</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p><a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="300x200" src="http://lorempixel.com/600/200/city">
                                        <div class="caption" contenteditable="true">
                                            <h3>Thumbnail label</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p><a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <img alt="300x200" src="http://lorempixel.com/600/200/sports">
                                        <div class="caption" contenteditable="true">
                                            <h3>Thumbnail label</h3>
                                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            <p><a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-flash component_img"></span></span>
                <span class="configuration">


                    <a class="btn btn-xs btn-default" href="#" rel="progress-striped">Striped</a>
                    <a class="btn btn-xs btn-default" href="#" rel="active">Active</a>
                </span>
                    <div class="preview">Progress Bar</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com23">
                                <div class="progress">
                                    <div class="progress-bar progress-success" style="width: 60%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-picture component_img"></span></span>
                <span class="configuration">
                    <a class="btn btn-xs btn-default" href="#" rel="well">well</a>
                </span>
                    <div class="preview">Media Object</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com24">
                                <div class="media">
                                    <a href="#" class="pull-left">
                                        <img src="http://lorempixel.com/64/64/" class="media-object">
                                    </a>
                                    <div class="media-body" contenteditable="true">
                                        <h4 class="media-heading">Nested media heading</h4>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                        <div class="media">
                                            <a href="#" class="pull-left">
                                                <img src="http://lorempixel.com/64/64/" class="media-object">
                                            </a>
                                            <div class="media-body" contenteditable="true">
                                                <h4 class="media-heading">Nested media heading</h4>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-list component_img"></span></span>
                <span class="configuration">
                </span>
                    <div class="preview">List group</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com25">
                                <div class="list-group" contenteditable="true">
                                    <a href="#" class="list-group-item active">Home</a>
                                    <div class="list-group-item">List header</div>
                                    <div class="list-group-item">
                                        <h4 class="list-group-item-heading">List group item heading</h4>
                                        <p class="list-group-item-text">...</p>
                                    </div>
                                    <div class="list-group-item"><span class="badge">14</span>Help</div>
                                    <a class="list-group-item active"><span class="badge">14</span>Help</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-align-justify component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="panel-default">Default</a></li>
                    <li class="" ><a href="#" rel="panel-primary">Primary</a></li>
                    <li class="" ><a href="#" rel="panel-success">Success</a></li>
                    <li class="" ><a href="#" rel="panel-info">Info</a></li>
                    <li class="" ><a href="#" rel="panel-warning">Warning</a></li>
                    <li class="" ><a href="#" rel="panel-danger">Danger</a></li>
                </ul>
            </span>

                </span>
                    <div class="preview">Panels</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com26">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title" contenteditable="true">Panel title</h3>
                                    </div>
                                    <div class="panel-body" contenteditable="true">
                                        Panel content
                                    </div>
                                    <div class="panel-footer" contenteditable="true">
                                        Panel footer
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </li>
                </ul>
                <ul class="nav nav-list accordion-group">
                <div class="component_header">
                    <p>JS Component</p>
                </div>
                <li class="boxes mute" id="elmJS">
                    <!--<div class="box box-element">
                        <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        <span class="drag label label-default"><span class="glyphicon glyphicon-briefcase component_img"></span></span>
                        <div class="preview">Modal</div>
                        <div class="view">
                        <div class="editable" contenteditable="true" id="com26">
                            <a id="myModalLink" href="#myModalContainer" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
                        </div>
                        <div class="modal fade" id="myModalContainer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel" contenteditable="true">Modal title</h4>
                                    </div>
                                    <div class="modal-body" contenteditable="true">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" contenteditable="true">Close</button>
                                        <button type="button" class="btn btn-primary" contenteditable="true">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-th-list component_img"></span></span>
                <span class="configuration">
              <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Position <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="active" ><a href="#" rel="">Default</a></li>
                    <li class="" ><a href="#" rel="navbar-static-top">Static top</a></li>
                    <li class="" ><a href="#" rel="navbar-fixed-top">Navbar fixed top</a></li>
                    <li class="" ><a href="#" rel="navbar-fixed-bottom">Navbar fixed bottom</a></li>
                </ul>
            </span>
                    <a class="btn btn-xs btn-default" href="#" rel="navbar-inverse">Inverse</a>
                    <!--a class="btn btn-xs btn-default" href="#" rel="navbar-static-top">Static top</a>
                    <a class="btn btn-mini" href="#" rel="navbar-fixed-top">Navbar fixed top</a>
                    <a class="btn btn-mini" href="#" rel="navbar-fixed-bottom">Navbar fixed bottom</a-->
                </span>
                    <div class="preview">Navbar</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com27">
                                <nav class="navbar navbar-default" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#">Brand</a>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Link</a></li>
                                            <li><a href="#">Link</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">One more separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <form class="navbar-form navbar-left" role="search">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                            </div>
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a href="#">Link</a></li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div><!-- /.navbar-collapse -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-th component_img"></span></span>
                <span class="configuration">
                </span>
                    <div class="preview">Tabs</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com28">
                                <div class="tabbable" id="myTabs"> <!-- Only required for left/right tabs -->
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab1" data-toggle="tab" contenteditable="true">Section 1</a></li>
                                        <li><a href="#tab2" data-toggle="tab" contenteditable="true">Section 2</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <p contenteditable="true">I'm in Section 1.</p>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <p contenteditable="true">Howdy, I'm in Section 2.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-comment component_img"></span></span>
                <span class="configuration">
                    <span class="btn-group btn-group-xs">
                <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#">Styles <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="" ><a href="#" rel="alert-success">Success</a></li>
                    <li class="" ><a href="#" rel="alert-info">Info</a></li>
                    <li class="" ><a href="#" rel="alert-warning">Warning</a></li>
                    <li class="" ><a href="#" rel="alert-danger">Danger</a></li>
                </ul>
            </span>

                </span>
                    <div class="preview">Alerts</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com29">
                                <div class="alert alert-success alert-dismissable" contenteditable="true">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h4>Alert!</h4>
                                    <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-briefcase component_img"></span></span>
                    <div class="preview">Collapse</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com30">
                                <div class="panel-group" id="myAccordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="panel-title" data-toggle="collapse" data-parent="#myAccordion" href="#collapseOne" contenteditable="true">
                                                Collapsible Group Item #1
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body" contenteditable="true">
                                                Anim pariatur cliche...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <a class="panel-title" data-toggle="collapse" data-parent="#myAccordion" href="#collapseTwo" contenteditable="true">
                                                Collapsible Group Item #2
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body" contenteditable="true">
                                                Anim pariatur cliche...
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box box-element">
                    <a href="#close" class="remove label label-danger"><i class="glyphicon glyphicon-remove"></i></a>
                    <span class="drag label label-default"><span class="glyphicon glyphicon-film component_img"></span></span>
                    <div class="preview">Slider</div>
                    <div class="view">
                        <div class="editable">
                            <div id="com31">
                                <div class="carousel slide" id="myCarousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                                        <li data-slide-to="1" data-target="#myCarousel" class=""></li>
                                        <li data-slide-to="2" data-target="#myCarousel" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img alt="" src="http://lorempixel.com/1600/500/sports/1">
                                            <div class="carousel-caption">
                                                <h4>First Thumbnail label</h4>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img alt="" src="http://lorempixel.com/1600/500/sports/2">
                                            <div class="carousel-caption">
                                                <h4>Second Thumbnail label</h4>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img alt="" src="http://lorempixel.com/1600/500/sports/3">
                                            <div class="carousel-caption">
                                                <h4>Third Thumbnail label</h4>
                                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </li>
                </ul>
            </div>
        </div>
        <div class="colponent_list_pop2">
            <p class="colponent_list_header">Settings</p>
            <span class="glyphicon glyphicon-remove colponent_list_remove"></span>
            <div class="colponent_list">
                <ul class="nav nav-list accordion-group backgrounds">
                    <div class="component_header">
                        <p>Main Background</p>
                    </div>
                    <div class="custom_color">
                        <label>Select Color </label>
                        <input type='text' id="main_custom_color"/>
                        <label>Select Image </label>
                    </div>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/1.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/2.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/3.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/4.png">
                    </li>
                </ul>
                <ul class="nav nav-list accordion-group header_backgrounds">
                    <div class="component_header">
                        <p>Header Background</p>
                    </div>
                    <div class="custom_color">
                        <label>Select Color </label>
                        <input type='text' id="header_custom_color"/>
                        <label>Select Image </label>
                    </div>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/1.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/2.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/3.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/4.png">
                    </li>
                </ul>
                <ul class="nav nav-list accordion-group footer_backgrounds">
                    <div class="component_header">
                        <p>Footer Background</p>
                    </div>
                    <div class="custom_color">
                        <label>Select Color </label>
                        <input type='text' id="footer_custom_color"/>
                        <label>Select Image </label>
                    </div>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/1.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/2.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/3.png">
                    </li>
                    <li>
                        <img src="<?php echo Yii::app()->baseUrl; ?>/component/image/pattern/4.png">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div style="display: none;">
    <p id="temp_body"></p>
    <p id="temp_footer"></p>
    <p id="temp_header"></p>
</div>
<div id="download-layout" style="display: none;"><div class="container"></div></div>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/component/js/scripts.min.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/component/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/component/css/template_edit.css">
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://cdn.transparensee.com/lib/jquery-plugin/touchpunch/0.2.2/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/component/js/jquery.htmlClean.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/component/css/jquery.jscrollpane.css">
<script src="<?php echo Yii::app()->baseUrl; ?>/component/js/jquery.jscrollpane.min.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/component/js/jquery.mousewheel.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/component/ckeditor/ckeditor.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/component/js/spectrum.js"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/component/css/spectrum.css">
<script>
    CKEDITOR.on( 'instanceCreated', function( event ) {
        var editor = event.editor,
            element = editor.element;
        if ((element.getAttribute( 'id' ) != 'com12') && (element.getAttribute( 'id' ) != 'com31') && (element.getAttribute( 'id' ) != 'com24') && (element.getAttribute( 'id' ) != 'com22')) {
            editor.on( 'configLoaded', function() {
                editor.config.removePlugins = 'colorbutton,find,flash,font,' +
                    'forms,iframe,image,newpage,removeformat,' +
                    'smiley,specialchar,stylescombo,templates';
                editor.config.toolbarGroups = [
                    { name: 'editing',		groups: [ 'basicstyles', 'links' ] },
                    { name: 'undo' },
                    { name: 'clipboard',	groups: [ 'selection', 'clipboard' ] },
                    { name: 'about' }
                ];
            });
        }else{
            editor.on( 'configLoaded', function() {
                editor.config.filebrowserBrowseUrl = "<?php echo Yii::app()->baseUrl.'/blog/media/create'; ?>";
            });
        }
    });
    function save(){
        downloadLayoutSrc();
        $(".member_plansa").attr('data-target','#member_plan');
        $.ajax({
            type: 'POST',
            url: '<?php echo  CHtml::normalizeUrl(array('pages/update','id'=>$pageID)); ?>',
            data: { 'Pages[content]': $('#download-layout').html(), 'UserTemplate[custom_css]': 'body{'+$('#temp_body').attr('style')+'}.header_body{'+$('#temp_header').attr('style')+'}.footer_body{'+$('#temp_footer').attr('style')+'}'},
            success:function(data){
                $('.page_saved').modal('show');
            },
            dataType:'html'
        });
    }
    $(document).ready(function () {
        $("#mobile_view").live( "click", function() {
            $('.edit #mobile_iframe').remove();
            $('.edit #tab_iframe').remove();
            $('.edit .header_body').hide();
            $('.edit .content_body').hide();
            $('.edit .footer_body').hide();
            $(".edit").append('<iframe width="320px" src="" id="mobile_iframe""></iframe>');
            $("#mobile_iframe").attr("src", "<?php echo Yii::app()->request->requestUri; ?>&iframe=n&edit=n");
        });
        $("#tablet_view").live( "click", function() {
            $('.edit #tab_iframe').remove();
            $('.edit #mobile_iframe').remove();
            $('.edit .header_body').hide();
            $('.edit .content_body').hide();
            $('.edit .footer_body').hide();
            $(".edit").append('<iframe width="600px" src="" id="tab_iframe"></iframe>');
            $("#tab_iframe").attr("src", "<?php echo Yii::app()->request->requestUri; ?>&iframe=n&edit=n");
        });
    })
</script>