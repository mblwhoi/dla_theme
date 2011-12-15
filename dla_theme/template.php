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

  // Set DLA menu html.
  $vars['dla_menu'] = _dla_theme_get_dla_menu();
}


/**
 * Helper function to get DLA menu from main DLA site or local cache.
 */
function _dla_theme_get_dla_menu($reset = FALSE){
  static $dla_menu;
  if (! isset($dla_menu) || $reset){
    // Retrieve DLA menu from cache...
    if (! $reset && ($cache = cache_get('dla_theme_dla_menu')) && ! empty($cache->data) ){
      $dla_menu = $cache->data;
    }
    // ... or get DLA menu from main dla site and cache.
    else{
      global $base_url;
      preg_match('@^(http://[^/]+)@i',$base_url, $matches);
      $hostname = $matches[0];
      $menu_url =  $hostname . '/dla/dla_menu';
      $dla_menu = file_get_contents($menu_url);

      // Cache for 15 minutes.
      cache_set('dla_theme_dla_menu', $dla_menu, 'cache', time() + 10);
    }
  }
  return $dla_menu;
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

    // Prepend MBLWHOI Library, DLA, and site name to breadcrumbs.
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