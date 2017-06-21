<?php if($aboveContent) : ?>
	<div class="ui one column container unpadded grid <?= IS_MOBILE ? " unpadded " : ""; ?>" >
		<div <?= IS_MOBILE ? : 'style="position:relative; top:-27px;"'; ?> class="ui column">
			<jdoc:include type="modules" name="above_content" style="block" />
		</div>
	</div>
<?php endif; ?>