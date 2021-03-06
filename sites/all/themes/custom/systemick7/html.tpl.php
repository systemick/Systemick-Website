<?php
// $Id: html.tpl.php,v 1.1.2.2 2011/02/06 22:47:17 andregriffin Exp $
?><!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- tag for systemick-web-development.co.uk -->
  <meta name="google-site-verification" content="0cnv-Cuv9SLWzRFe0p7NpuTe-cW9s0xlca6Y-dbOg04" />
  <!-- tag for systemick.co.uk -->
  <meta name="google-site-verification" content="N_9gO3El-uku9IMrEpVtLV-aDenvEM9Rb6Kv4Cwec1Q" />
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>

</html>