<?php

  // Set ENV variable
  $env = getenv('ENV');

  // Find php version
  $phpver = substr(filter_var(PHP_VERSION, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION), 0, 3);

  // Mobile detection class from Piwik
  $dd = new \DeviceDetector\DeviceDetector($_SERVER['HTTP_USER_AGENT']);
  $dd->discardBotInformation();
  $dd->parse();
  define('IS_MOBILE', $dd->isMobile());

  // Set variables template
  $base = JUri::base();
  $template = $base . 'templates/' . $this->template;
  $company = $this->params->get('company');
  $analytics = $this->params->get('analytics');
  $addthiscode = $this->params->get('addthiscode');

  // Document style sheets and js
  $doc = JFactory::getDocument();
  $doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/assets/css/semantic.min.css', $type = 'text/css');
  $doc->addStyleSheet(JUri::base() . 'templates/' . $this->template . '/assets/css/layout.css', $type = 'text/css');
  $doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/jquery.min.js', 'text/javascript');
  $doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/semantic.min.js', 'text/javascript');
  $doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/mapstyle.js', 'text/javascript');
  $doc->addScript($this->baseurl . '/templates/' . $this->template . '/assets/js/actions.js', 'text/javascript');

  // Find modules
  $belowContentLeft = $this->countModules('below_content_left');
  $belowContentRight = $this->countModules('below_content_right');
  $bottom = $this->countModules('bottom');

 ?>