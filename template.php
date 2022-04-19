<?php

/**
 * Implements hook_form_FORM_ID_alter().
 */
function unl_five_affiliate_form_search_block_form_alter(&$form, &$form_state, $form_id) {
  $form['#id'] = 'search_form';
  $form['#attributes']['class'][] = 'dcf-form-controls-inline';

  $form['search_block_form']['#id'] = 'q';
  $form['search_block_form']['#size'] = null;
  $form['search_block_form']['#attributes']['class'][] = 'dcf-p-0 dcf-pl-1 dcf-pr-1';
  $form['search_block_form']['#theme_wrappers'] = array();

  $form['#action'] = $GLOBALS['base_path'] . 'search/node';

  $form['actions']['#theme_wrappers'] = array();
  $form['actions']['submit']['#attributes']['class'][] = 'dcf-btn dcf-btn-primary';
  $form['actions']['submit']['#buttontype'] = 'button';
  $form['actions']['submit']['#value'] = '<span class="dcf-sr-only">Submit</span><svg class="dcf-h-4 dcf-w-4 dcf-stroke-current" aria-hidden="true" focusable="false" height="16" width="16" viewBox="0 0 48 48">
                                   <path d="M18 36a17.9 17.9 0 0 0 11.27-4l15.31 15.41a2 2 0 0 0 2.84-2.82L32.08 29.18A18 18 0 1 0 18 36zm0-32A14 14 0 1 1 4 18 14 14 0 0 1 18 4z"></path>
                                </svg>';
}

/**
 * Override theme_button(). http://drupal.stackexchange.com/a/163332
 */
function unl_five_affiliate_button($variables) {
  $element = $variables['element'];
  $element['#attributes']['type'] = 'submit';
  element_set_attributes($element, array('id', 'name', 'value'));

  $element['#attributes']['class'][] = 'form-' . $element['#button_type'];
  if (!empty($element['#attributes']['disabled'])) {
    $element['#attributes']['class'][] = 'form-button-disabled';
  }

  if (isset($element['#buttontype']) && $element['#buttontype'] == 'button') {
    $value = $element['#value'];
    unset($element['#attributes']['value']);
    return '<button' . drupal_attributes($element['#attributes']) . '>' . $value . '</button>';
  }
  else {
    return '<input' . drupal_attributes($element['#attributes']) . ' />';
  }
}

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
