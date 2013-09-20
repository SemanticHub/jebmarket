<?php
/* @var $this UserController */
/* @var $model User */
?>
<h1 class="page-title">Welcome to JebMarket !!</h1>
<div class="note bs-callout bs-callout-info">
    <?php if($store != "") { ?>
        <h4>Success !!, Your JebMarket Store '<?php echo $store ?>' is ready for roll-out</h4>
    <?php } else { ?>
        <h4>Success !!, Your JebMarket account is ready for roll-out</h4>
    <?php } ?>
</div>
