<?php $this->beginContent('//layouts/column2'); ?>
<div id="rights" class="container">
	<div id="content">
		<?php if( $this->id!=='install' ): ?>
			<div id="menu">
				<?php $this->renderPartial('/_menu'); ?>
			</div>
		<?php endif; ?>
		<?php $this->renderPartial('/_flash'); ?>
		<?php echo $content; ?>
	</div>
</div>
<?php $this->endContent(); ?>