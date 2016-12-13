<?php
/**
 * This will remove the default welcome message from front page.
 */
function arian_open_charity_preprocess_page(&$vars) {
    if (drupal_is_front_page()) {
        unset($vars['page']['content']['system_main']['default_message']); //will remove message "no front page content is created"
        drupal_set_title(''); //removes welcome message (page title)
    }
}

/**
 * Implements hook_html_head_alter().
 * This will overwrite the default meta character type tag with HTML5 version.
 */
function arian_open_charity_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}


/**
 * Duplicate of theme_menu_local_tasks() but adds clearfix to tabs.
 */
function arian_open_charity_menu_local_tasks(&$variables) {
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary clearfix">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary clearfix">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  return $output;
}


function arian_open_charity_page_alter($page) {
  // <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  $viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
    'name' =>  'viewport',
    'content' =>  'width=device-width'
    )
  );
  drupal_add_html_head($viewport, 'viewport');
}
?>
