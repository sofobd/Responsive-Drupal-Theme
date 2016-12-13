<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function arian_open_charity_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['opencharity_theme_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Arian Open Charity Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['opencharity_theme_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','arian_open_charity'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['opencharity_theme_settings']['top_social_link'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social links in footer'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['opencharity_theme_settings']['top_social_link']['social_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show social icons (Facebook, Twitter etc.) in footer'),
    '#default_value' => theme_get_setting('social_links', 'arian_open_charity'),
    '#description'   => t("Check this option to show twitter, facebook icons in footer. Uncheck to hide."),
  );
  $form['opencharity_theme_settings']['top_social_link']['twitter_profile_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter URL'),
    '#default_value' => theme_get_setting('twitter_profile_url', 'arian_open_charity'),
    '#description' => t("Enter your Twitter profile URL."),
  );
  $form['opencharity_theme_settings']['top_social_link']['facebook_profile_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook URL'),
    '#default_value' => theme_get_setting('facebook_profile_url', 'arian_open_charity'),
    '#description' => t("Enter your Facebook profile URL."),
  );
  $form['opencharity_theme_settings']['top_social_link']['gplus_profile_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Gplus URL'),
    '#default_value' => theme_get_setting('gplus_profile_url', 'arian_open_charity'),
    '#description' => t("Enter your Gplus profile URL."),
  );
  $form['opencharity_theme_settings']['top_social_link']['linkedin_profile_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Linkedin URL'),
    '#default_value' => theme_get_setting('linkedin_profile_url', 'arian_open_charity'),
    '#description' => t("Enter your Linkedin profile URL."),
  );

}


