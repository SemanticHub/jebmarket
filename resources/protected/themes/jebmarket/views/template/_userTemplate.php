<?php
/* @var $this UserTemplateController */
/* @var $data UserTemplate */
$template = Template::model()->findByPk($data->jebapp_template_id);
?>

<div class="col-md-4">
    <div class="view_theme">
        <div class="<?php echo ($data->active == '1') ? 'template_title active' : 'template_title'; ?>">
            <h4><?php echo $template->title; ?></h4>
            <a href="<?php echo Yii::app()->baseUrl.'/pages/admin'; ?>" class="btn btn-primary btn-xs">Customize</a>
        </div>
        <div class="viewimg">
            <img src="<?php echo Yii::app()->baseUrl.'/themes/'.$template->name.'/screenshot.jpg'; ?>" alt="" width="100%" />
        </div>
        <div class="<?php echo ($data->active == '1') ? 'template_buttons active' : 'template_buttons'; ?>">
            <div class="left_site">
                <?php if($data->active == '1'){ ?>
                    <h4>Active</h4>
                <?php }else{
                    echo CHtml::ajaxLink("Uninstall",
                        array("/userTemplate/delete","id"=>$data->id),
                        array(
                            "success"=>'js:function(data){$.fn.yiiListView.update("template_list",{});}',
                            "type"=>"post",
                        ),
                        array("class"=>'btn btn-danger btn-xs'));
                } ?>
            </div>
            <div class="right_site">
                <?php if($data->active == '0'){
                    echo CHtml::ajaxLink("Active",
                        array("userTemplate/active","id"=>$data->id),
                        array(
                            "success"=>'js:function(data){$.fn.yiiListView.update("template_list",{});}',
                            "type"=>"post",
                        ),
                        array("class"=>'btn btn-success btn-xs'));
                } ?>
                <a href="#" class="btn btn-default btn-xs">Preview</a>
            </div>
        </div>
    </div>
</div>