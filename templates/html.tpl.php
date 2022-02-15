<?php if ($format !== 'partial'): ?><!DOCTYPE html>
<html class="dcf-no-js dcf-no-webp" lang="<?php print $language->language; ?>"><!-- InstanceBegin template="/Templates/fixed.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<?php require(DRUPAL_ROOT."/wdn/templates_5.3/includes/global/head-1.html"); ?>
<!--
  Membership and regular participation in the University of Nebraska–Lincoln (UNL) Web Developer Network (WDN) is required to use the UNLedu Web Framework. Visit the WDN site at https://wdn.unl.edu/. Register for our mailing list and add your site or server to UNL Web Audit.
  All framework code is the property of the UNL Web Developer Network. The code seen in a source code view is not, and may not be used as, a template. You may not use this code, a reverse-engineered version of this code, or its associated visual presentation in whole or in part to create a derivative work.
  This message may not be removed from any pages based on the UNLedu Web Framework.

  $Id: affiliate.dwt | 8754e2081378eac1fd8b92efdff0f0a280977828 | Tue Jul 14 15:01:36 2020 -0500 | Ryan Dee  $
-->
<!-- InstanceBeginEditable name="doctitle" -->
  <title><?php print $head_title; ?></title>
<!-- InstanceEndEditable -->
<?php require(DRUPAL_ROOT."/wdn/templates_5.3/includes/global/affiliate-head-2.html"); ?>
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<?php if (null !== theme_get_setting('affiliate_css') && !empty(trim(theme_get_setting('affiliate_css')))) : ?>
  <?php print theme_get_setting('affiliate_css'); ?>
<?php endif; ?>
</style>
<?php if (theme_get_setting('unl_deprecated_css') !== 0) : ?>
<link rel="preload" href="https://unlcms.unl.edu/wdn/templates_5.3/css/deprecated.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://unlcms.unl.edu/wdn/templates_5.3/css/deprecated.css"></noscript>
<?php endif; ?>
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
<?php print theme_get_setting('head_html'); ?>
<!-- InstanceEndEditable -->
</head>
<body class="unl affiliate <?php print $classes; ?>" data-version="5.3" <?php print $attributes;?>>
<?php require(DRUPAL_ROOT."/wdn/templates_5.3/includes/global/skip-nav.html"); ?>

<?php print $page_top; ?>
<?php endif; ?>
<?php print $page; ?>
<?php if ($format !== 'partial'): ?>
<?php require(DRUPAL_ROOT."/wdn/templates_5.3/includes/global/js-body.html"); ?>
<!-- InstanceBeginEditable name="jsbody" -->
<?php print $page_bottom; ?>
<!-- InstanceEndEditable -->
</body>
<!-- InstanceEnd --></html>
<?php endif; ?>

