<div id="top" class="ui container grid">
	<div class="ui six wide column">
		<a id="logo" href=""><img class="ui logo image" onerror="this.onerror=null; this.src='<?=$template;?>/assets/img/logo.png'" src="<?=$template;?>/assets/img/logo.svg" ></a>
	</div>
	<div class="ui ten wide column">
		<?php if( ! IS_MOBILE) : ?>
		<nav>
      <div id="menu" class="ui right floated text menu">
        <jdoc:include type="modules" name="menu" />
      </div>
    </nav>
  	<?php else: ?>
  		<a id="sidebarButton"><i class="ui big bars icon"></i></a>
  	<?php endif; ?>
	</div>
</div>