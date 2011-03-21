<?php

require_once('theme-settings.php');

/**
 * Page preprocessing
 */
function dla_theme_preprocess_page(&$vars) {
  global $language, $theme_key, $theme_info, $user;

  // If banner feature is enabled...
  if(theme_get_setting('dla_theme_toggle_banner')){

      // Get the banner path
      $vars['banner'] = theme_get_setting('dla_theme_banner_path');

  }
}


/**
 * Implementation of hook_theme_breadcrumb
 */
function dla_theme_breadcrumb($breadcrumb){

    // Remove 'home' breadcrumb (first array element) if it is present
    if (!empty($breadcrumb)) {
        array_shift($breadcrumb);
    }

    // Get sitename.
    $sitename = variable_get('site_name', 'drupal');

    // Prepend MBLWHOI Library, DLA, and site name tle to breadcrumbs.
    array_unshift($breadcrumb, 
                  l('MBLWHOI Library', 'http://www.mblwhoilibrary.org'),
                  l('WHOI DLA', '/dla', array('external' => TRUE)),
                  l($sitename, '<front>')
                 );

    // Append page title.
    $breadcrumb[] = drupal_get_title();

    return '<div class="breadcrumb">' . implode(' » ', $breadcrumb) . '</div>';
}

/**
 * Implementation of hook_theme_menu_item
 */
/*
function dla_theme_menu_item($link, $has_children, $menu = '', $in_active_trail = FALSE, $extra_class = NULL) {
    $class = ($menu ? 'expanded' : ($has_children ? 'collapsed' : 'leaf'));
    if (!empty($extra_class)) {
        $class .= ' ' . $extra_class;
    }
    if ($in_active_trail) {
        $class .= ' active-trail';
    }
    return '<li class="' . $class . '"><div class=menu-item-link>' . $link . '</div>' . $menu . "</li>\n";
}

*/