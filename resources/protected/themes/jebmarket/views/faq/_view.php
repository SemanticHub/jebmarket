<?php
/* @var $this FaqController */
/* @var $data Faq */
?>
<div class="panel panel-default">
    
    <div class="panel-heading">
      <h4 class="panel-title">
          <a class="btn btn-default btn-xs" data-toggle="collapse" data-parent="#accordion" data-target="#f<?php echo CHtml::encode($data->id); ?>">
              <span class="glyphicon glyphicon-sort"></span>
          </a> &#160;
          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#f<?php echo CHtml::encode($data->id); ?>">
            <?php echo CHtml::encode($data->faq); ?>
        </a>
      </h4>
    </div>
    <div id="f<?php echo CHtml::encode($data->id); ?>" class="panel-collapse collapse">
      <div class="panel-body">
           <?php echo CHtml::decode($data->answer); ?>
      </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $('.panel-group').attr('id', 'accordion');
    });
</script>