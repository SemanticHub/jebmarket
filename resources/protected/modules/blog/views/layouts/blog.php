<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <?php echo $content; ?>
        </div>
        <div class="col-md-3 sidebar sidebar-right">
            <?php $this->widget('BlogComments') ?>
            <?php $this->widget('BlogTag') ?>
        </div>
    </div>
</div>
<?php $this->endContent(); ?>