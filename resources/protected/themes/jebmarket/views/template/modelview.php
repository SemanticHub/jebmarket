<div class="single_template_view">
    <div class="image_left">
        <img class="img-thumbnail" src="<?php echo Yii::app()->baseUrl.'/themes/'.$model->name.'/screenshot.jpg'; ?>"/>
    </div>
    <div class="content_right">
        <h3><?php echo $model->title; ?></h3>
        <p><?php echo $model->description; ?></p>
        <p>
            <?php if(Yii::app()->user->isGuest){ ?>
                <a href="<?php echo Yii::app()->baseUrl.'/site/login'; ?>" class="btn btn-success">Install This Template</a>
            <?php }else{ if(Yii::app()->request->getParam('front')=='y'){ ?>
                <a href="<?php echo Yii::app()->baseUrl.'/userTemplate/select?front=y&id='.$model->id; ?>" class="btn btn-success">Install This Template</a>
            <?php }else{ ?>
                <a href="<?php echo Yii::app()->baseUrl.'/userTemplate/select?id='.$model->id; ?>" class="btn btn-success">Install This Template</a>
            <?php }} ?>
            <button type="button" class="btn btn-default cancel_single_model">Cancel</button>
        </p>
    </div>
</div>