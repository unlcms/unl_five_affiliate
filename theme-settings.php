<?php

/**
 * Implements hook_form_system_theme_settings_alter().
 * Done as THEMENAME_form_system_theme_settings_alter(), reference http://drupal.org/node/177868
 */
function unl_five_affiliate_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['affiliate'] = [
    '#type' => 'fieldset',
    '#title' => t('Affiliate regions'),
    '#description' => t('Samples of these files can be found at https://github.com/unl/wdntemplates/tree/5.3/wdn/templates_5.3/includes/local'),
    '#weight' => -45,
    'affiliateheaderglobal' => [
      '#type' => 'textarea',
      '#rows' => 12,
      '#field_prefix' => t('local/affiliate-header-global-1.html'),
      '#default_value' => NULL !== theme_get_setting('affiliateheaderglobal') ? theme_get_setting('affiliateheaderglobal') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-header-global-1.html'),
    ],
    'affiliateidm' => [
      '#type' => 'textarea',
      '#rows' => 12,
      '#field_prefix' => t('local/affiliate-idm.html'),
      '#default_value' => NULL !== theme_get_setting('affiliateidm') ? theme_get_setting('affiliateidm') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-idm.html'),
    ],
    'affiliatesearch' => [
      '#type' => 'textarea',
      '#rows' => 12,
      '#field_prefix' => t('local/affiliate-search.html'),
      '#default_value' => NULL !== theme_get_setting('affiliatesearch') ? theme_get_setting('affiliatesearch') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-search.html'),
    ],
    'affiliatelogo' => [
      '#type' => 'textarea',
      '#rows' => 12,
      '#field_prefix' => t('local/affiliate-logo-lockup-1.html'),
      '#default_value' => NULL !== theme_get_setting('affiliatelogo') ? theme_get_setting('affiliatelogo') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-logo-lockup-1.html'),
    ],
    'affiliatemobilesearch' => [
      '#type' => 'textarea',
      '#rows' => 10,
      '#field_prefix' => t('local/affiliate-mobile-search.html'),
      '#default_value' => NULL !== theme_get_setting('affiliatemobilesearch') ? theme_get_setting('affiliatemobilesearch') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-mobile-search.html'),
    ],
    'affiliatemobileidm' => [
      '#type' => 'textarea',
      '#rows' => 10,
      '#field_prefix' => t('local/affiliate-mobile-idm.html'),
      '#default_value' => NULL !== theme_get_setting('affiliatemobileidm') ? theme_get_setting('affiliatemobileidm') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-mobile-idm.html'),
    ],
    'contactinfo' => [
      '#type' => 'textarea',
      '#rows' => 20,
      '#field_prefix' => t('local/affiliate-footer.html'),
      '#default_value' => NULL !== theme_get_setting('contactinfo') ? theme_get_setting('contactinfo') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-footer.html'),
    ],
    'affiliate_css' => array(
      '#title' => t('CSS'),
      '#field_prefix' => t('local/affiliate-custom.css'),
      '#type' => 'textarea',
      '#rows' => 16,
      '#default_value' => NULL !== theme_get_setting('affiliate_css') ? theme_get_setting('affiliate_css') : file_get_contents('https://unlcms.unl.edu/wdn/templates_5.3/includes/local/affiliate-custom.css'),
    ),
  ];

  $form['call_to_action'] = array();
  $form['logo'] = array();
  $form['theme_settings']['toggle_logo'] = array();
  $form['theme_settings']['toggle_name'] = array();
}
