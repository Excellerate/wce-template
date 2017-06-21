<?php include JPATH_BASE . '/templates/cwe/tmpl.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Meta -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<jdoc:include type="head" />
		<script>var $base = "<?= JUri::base(); ?>"</script>

		<!-- Facebook Links -->
		<meta property="og:image" content="<?= JUri::base(); ?>templates/cwe/assets/img/logo.png" />
		<meta property="og:title" content="<?= $company; ?>" />

		<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?= $template; ?>/assets/css/ie.css" />
		<![endif]-->

		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="57x57"	      href="<?= $template; ?>/assets/icons/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60"	      href="<?= $template; ?>/assets/icons/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72"	      href="<?= $template; ?>/assets/icons/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76"	      href="<?= $template; ?>/assets/icons/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114"	    href="<?= $template; ?>/assets/icons/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120"	    href="<?= $template; ?>/assets/icons/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144"	    href="<?= $template; ?>/assets/icons/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152"	    href="<?= $template; ?>/assets/icons/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180"	    href="<?= $template; ?>/assets/icons/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"	href="<?= $template; ?>/assets/icons/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32"	  href="<?= $template; ?>/assets/icons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96"	  href="<?= $template; ?>/assets/icons/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16"	  href="<?= $template; ?>/assets/icons/favicon-16x16.png">
		<link rel="manifest"	                            href="<?= $template; ?>/assets/icons/manifest.json">

		<!-- Analytics and AddThis -->
		<?php if( ($env == false or $env == 'production') and $analytics ) : ?>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', '<?= $analytics; ?>', 'auto');
		ga('send', 'pageview');
		</script>
		<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?= $addthiscode; ?>"></script>
		<?php endif; ?>
  </head>

  <body class="<?= IS_MOBILE ? '' : 'body'; ?>">

	<!-- Mobile Menu -->
	<?php if(IS_MOBILE) : ?>
	<div id="sidebar" class="ui sidebar inverted vertical menu">
			<jdoc:include type="modules" name="menu" />
		</div>
	</div>
	<?php endif; ?>

	<!-- Mobile Menu Push -->
	<div class="pusher">

	<jdoc:include type="message" />

		<!-- Top -->
		<?php include('parts/top.php'); ?>

		<!-- Slider -->
		<?php include('parts/slider.php'); ?>

		<!-- Above content -->
		<?php include('parts/aboveContent.php'); ?>

		<!-- Content -->
		<?php include('parts/content.php'); ?>

		<!-- Newsflash -->
		<?php include('parts/newsflash.php'); ?>

		<!-- Bottom possitions -->
		<?php include('parts/belowContent.php'); ?>
		<?php include('parts/bottom.php'); ?>

		<!-- Footer -->
		<?php include('parts/footer.php'); ?>

		<!-- Copyright -->
		<?php include('parts/copyright.php'); ?>

		<!-- My info -->
		<?php include('parts/me.php'); ?>
	</div>

	<!-- Debuging -->
	<jdoc:include type="modules" name="debug" style="none" />

  </body>
</html>