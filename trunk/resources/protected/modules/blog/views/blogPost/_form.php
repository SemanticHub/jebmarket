<?php
/* @var $this BlogPostController */
/* @var $model BlogPost */
/* @var $form CActiveForm */
?>

<div class="row blog_form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blog-post-form',
	'enableAjaxValidation'=>true,
    'htmlOptions' => array(
        'class' => 'form-horizontal',
        'role' => 'form'
    )
)); ?>

    <div class="col-md-9">
        <?php
            echo $form->errorSummary($model, '', '', array('class' => 'alert alert-danger'));
        ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'post_title', array('class' => 'control-label')); ?>
            <?php echo $form->textField($model, 'post_title', array('size' => 60, 'maxlength' => 255, 'class' => 'form-control', 'placeholder' => 'Enter title here')); ?>
            <?php echo $form->error($model, 'post_title', array('class' => 'text-danger control-hint')); ?>
        </div>

        <div class="form-group">
            <label class="control-label required" for="BlogPost_post_content">Post Content <span class="required">*</span> <a class="btn btn-success btn-xs" data-toggle="modal" href="<?php echo Yii::app()->getBaseUrl(true)."/blog/media/index";?>" data-target="#myModal"><strong class="glyphicon glyphicon-picture"></strong> Add Media</a></a> </label>
            <?php echo $form->textArea($model, 'post_content', array('rows'=>6, 'cols'=>50, 'class' => 'form-control')); ?>
            <?php echo $form->error($model, 'post_content', array('class' => 'text-danger control-hint')); ?>
        </div>
    </div>
    <div class="col-md-3">
        <div class="thumbnail">
            <div class="list-group">
                <p class="list-group-item active">Publish</p>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'post_status', array('class' => 'control-label')); ?>
                    <?php echo $form->dropDownList($model,'post_status',array('public'=>'Public', 'private'=>'Private', 'draft'=>'Draft', 'trash'=>'Trash'), array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'post_status', array('class' => 'text-danger control-hint')); ?>
                </div>

                <div class="form-group">
                    <?php echo $form->labelEx($model, 'comment_status', array('class' => 'control-label')); ?>
                    <?php echo $form->dropDownList($model,'comment_status',array('public'=>'Public', 'private'=>'Private', 'none'=>'No Comments'), array('class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'comment_status', array('class' => 'text-danger control-hint')); ?>
                </div>
            </div>
        </div>
        <div class="thumbnail">
            <div class="list-group checkbox_category">
                <p class="list-group-item active">Category</p>
                <?php echo $form->checkBoxList($model, 'category', CHtml::listData(BlogTerms::model()->findAll(array('condition' => "taxonomy = 'category' AND jebapp_user_id =".Yii::app()->user->id)), 'term_id', 'name'), array('class' => 'category_input')); ?>
                <p><?php echo CHtml::link('Add New Category',array('/blog/blogTerms/createcategory'), array('class'=>'btn btn-success btn-xs add_new_cat blog_ajax_link')); ?></p>
            </div>
        </div>
        <div class="thumbnail">
            <div class="list-group checkbox_category">
                <p class="list-group-item active">Tags</p>
                <?php echo $form->checkBoxList($model, 'tag', CHtml::listData(BlogTerms::model()->findAll(array('condition' => "taxonomy = 'tag' AND jebapp_user_id =".Yii::app()->user->id)), 'term_id', 'name'), array('class' => 'category_input')); ?>
                <p><?php echo CHtml::link('Add New Tag',array('/blog/blogTerms/createtag'), array('class'=>'btn btn-success btn-xs add_new_cat blog_ajax_link')); ?></p>
            </div>
        </div>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content add_media"></div>
    </div>
</div>