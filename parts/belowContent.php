<!-- Below content to the left and right -->
<?php if($belowContentLeft or $belowContentRight) : ?>
	<div class="ui <?= ($belowContentLeft and $belowContentRight) ? "two" : "one"; ?> column container grid below <?= IS_MOBILE ? " unpadded " : ""; ?>" >
	  <?php if($belowContentLeft) : ?><jdoc:include type="modules" name="below_content_left" style="block" /><?php endif; ?>
	  <?php if($belowContentRight) : ?><jdoc:include type="modules" name="below_content_right" style="red" /><?php endif; ?>
	</div>
<?php endif; ?>