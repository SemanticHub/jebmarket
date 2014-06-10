<div class="col-md-4">
    <div class="view_theme">
        <div class="template_title">
            <h4><?php echo $data->title; ?></h4>
        </div>
        <div class="viewimg">
            <img src="<?php echo $this->assetUrl.'/screenshot.jpg'; ?>" alt="" width="100%" />
        </div>
        <div class="template_buttons">
            <div class="left_site">
                <?php
                if($data->price > 0){
                    echo 'Price: $'.$data->price;
                }else{
                    echo 'Price: Free';
                }
                ?>
            </div>
            <div class="right_site">
                <a href="#" data-url="<?php echo Yii::app()->baseUrl.'/template/modelview?front=y&id='.$data->id; ?>" class="btn btn-default btn-xs view_templates">View</a>
                <?php if(Yii::app()->user->isGuest){ ?>
                    <a href="<?php echo Yii::app()->baseUrl.'/site/login'; ?>" class="btn btn-success btn-xs">Install</a>
                <?php }else{ ?>
                    <a href="<?php echo Yii::app()->baseUrl.'/userTemplate/select?front=y&id='.$data->id; ?>" class="btn btn-success btn-xs">Install</a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>