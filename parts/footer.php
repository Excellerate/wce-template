<?php if( ! IS_MOBILE) : ?>
<div id="footer" class="ui center aligned dark grey background container grid">
	<?php if ($facebook = $this->params->get('facebook', false)) : ?>
	<div class="ui column"><a href="<?= $facebook; ?>"><i class="ui big facebook square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($linkedin = $this->params->get('linkedin', false)) : ?>
	<div class="ui column"><a href="<?= $linkedin; ?>"><i class="ui big linkedin square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($twitter = $this->params->get('twitter', false)) : ?>
	<div class="ui column"><a href="<?= $twitter; ?>"><i class="ui big twitter square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($youtube = $this->params->get('youtube', false)) : ?>
	<div class="ui column"><a href="<?= $youtube; ?>"><i class="ui big youtube square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($googlePlus = $this->params->get('googlePlus', false)) : ?>
	<div class="ui column"><a href="<?= $googlePlus; ?>"><i class="ui big google plus square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($pinterest = $this->params->get('pinterest', false)) : ?>
	<div class="ui column"><a href="<?= $pinterest; ?>"><i class="ui big pinterest square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($instagram = $this->params->get('instagram', false)) : ?>
	<div class="ui column"><a href="<?= $instagram; ?>"><i class="ui big instagram square icon"></i></a></div>
	<?php endif; ?>
</div>

<?php else : ?>
<div id="footer" class="ui center aligned dark grey background container grid">
	<?php if ($facebook = $this->params->get('facebook', false)) : ?>
	<div class="ui column"><a href="<?= $facebook; ?>"><i class="ui facebook square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($linkedin = $this->params->get('linkedin', false)) : ?>
	<div class="ui column"><a href="<?= $linkedin; ?>"><i class="ui linkedin square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($twitter = $this->params->get('twitter', false)) : ?>
	<div class="ui column"><a href="<?= $twitter; ?>"><i class="ui twitter square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($youtube = $this->params->get('youtube', false)) : ?>
	<div class="ui column"><a href="<?= $youtube; ?>"><i class="ui youtube square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($googlePlus = $this->params->get('googlePlus', false)) : ?>
	<div class="ui column"><a href="<?= $googlePlus; ?>"><i class="ui google plus square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($pinterest = $this->params->get('pinterest', false)) : ?>
	<div class="ui column"><a href="<?= $pinterest; ?>"><i class="ui pinterest square icon"></i></a></div>
	<?php endif; ?>
	<?php if ($instagram = $this->params->get('instagram', false)) : ?>
	<div class="ui column"><a href="<?= $instagram; ?>"><i class="ui instagram square icon"></i></a></div>
	<?php endif; ?>
</div>
<?php endif; ?>
