<?php

function modChrome_block($module, &$params, &$attribs)
{
	$moduleTag     = $params->get('module_tag', 'div');
	$bootstrapSize = (int) $params->get('bootstrap_size', 0);
	$moduleClass   = $bootstrapSize != 0 ? ' span' . $bootstrapSize : '';
	$headerTag     = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass   = htmlspecialchars($params->get('header_class', 'page-header'));

	if ($module->content){
		echo '<' . $moduleTag . ' class=column ' . htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass . '">';
			if ($module->showtitle){
				echo '<' . $headerTag . ' class="ui header ' . $headerClass . '">' . $module->title . '</' . $headerTag . '>';
			}
			echo $module->content;
		echo '</' . $moduleTag . '>';
	}
}

function modChrome_flat($module, &$params, &$attribs)
{
	$background = $params->get('backgroundimage', false);
	$showTitle  = $module->showtitle;

	print '<div class="custom module column" style="background-image:url('.$background.')">';
		print $showTitle ? '<div class="ui header">'.$module->title.'</div>' : null;
		print $module->content;
	print '</div>';
}

function modChrome_short($module, &$params, &$attribs)
{
	$background = $params->get('backgroundimage', false);
	$showTitle  = $module->showtitle;

	print '<div class="custom eight wide centered module column" style="background-image:url('.$background.')">';
		print $showTitle ? '<div class="ui header">'.$module->title.'</div>' : null;
		print $module->content;
	print '</div>';
}

function modChrome_red($module, &$params, &$attribs)
{
	$background = $params->get('backgroundimage', false);
	$showTitle  = $module->showtitle;

	print '<div class="custom module red background column" style="background-image:url('.$background.')">';
		print $showTitle ? '<div class="ui header">'.$module->title.'</div>' : null;
		print $module->content;
	print '</div>';
}

function modChrome_grey($module, &$params, &$attribs)
{
	$background = $params->get('backgroundimage', false);
	$showTitle  = $module->showtitle;

	print '<div class="custom module grey background column" style="background-image:url('.$background.')">';
		print $showTitle ? '<div class="ui header">'.$module->title.'</div>' : null;
		print $module->content;
	print '</div>';
}

function modChrome_map($module, &$params, &$attribs)
{
	$showTitle = $module->showtitle;

	print '<div class="map module unpadded column">';
		print $showTitle ? '<div class="ui header">'.$module->title.'</div>' : null;
		print $module->content;
		print '<div id="map" style="width:100%; height:300px;">loading...</div>';
	print '</div>';
}
