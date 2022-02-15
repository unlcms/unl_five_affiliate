<?php

/**
 * Implements template_preprocess_html().
 */
function unl_five_affiliate_preprocess_html(&$vars, $hook) {
  if (!module_exists('metatag')) {
    // Set the <title> tag to UNL format: Page Title | Site Name | Nebraska
    if ($vars['is_front']) {
      unset($vars['head_title_array']['title']);
    }
    else if (theme_get_setting('site_name_abbreviation')) {
      $vars['head_title_array']['name'] = theme_get_setting('site_name_abbreviation');
    }
    $vars['head_title'] = implode(' | ', $vars['head_title_array']);
  }
}

/**
 * Implements theme_breadcrumb().
 */
function unl_five_affiliate_breadcrumb($variables) {
  /**
   * OG
   */
  if (module_exists('og')) {
    return unl_five_og_breadcrumb($variables);
  }

  $breadcrumbs = $variables['breadcrumb'];

  if (count($breadcrumbs) == 0) {
    $breadcrumbs[] = '<a href="">' . check_plain(unl_five_get_site_name_abbreviated()) . '</a>';
  }
  else {
    // Change 'Home' to $site_name.
    array_unshift($breadcrumbs,
      str_replace('Home', check_plain(unl_five_get_site_name_abbreviated()),
        array_shift($breadcrumbs)));
  }

  // Add the intermediate breadcrumbs if they exist.
  $intermediateBreadcrumbs = theme_get_setting('intermediate_breadcrumbs');
  if (is_array($intermediateBreadcrumbs)) {
    krsort($intermediateBreadcrumbs);
    foreach ($intermediateBreadcrumbs as $intermediateBreadcrumb) {
      if ($intermediateBreadcrumb['text'] && $intermediateBreadcrumb['href']) {
        array_unshift($breadcrumbs, '<a href="' . $intermediateBreadcrumb['href'] . '">' . check_plain($intermediateBreadcrumb['text']) . '</a>');
      }
    }
  }

  // Append menu link title of current page. (See http://drupal.org/node/133242)
  if (!drupal_is_front_page()) {
    $breadcrumbs[] = check_plain(menu_get_active_title());
  }

  $html = '<ol>' . PHP_EOL;
  foreach ($breadcrumbs as $breadcrumb) {
    $html .= '<li>' .  $breadcrumb . '</li>';
  }

  return $html . '</ol>';
}
