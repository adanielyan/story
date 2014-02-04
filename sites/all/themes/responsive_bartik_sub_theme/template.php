<?php

function responsive_bartik_sub_theme_menu_tree__main_menu($variables) {
  return '<ul id="main-menu-links" class="menu clearfix">' . $variables['tree'] . '</ul>';
}

function responsive_bartik_sub_theme_links($variables) {
  if (array_key_exists('id', $variables['attributes']) && $variables['attributes']['id'] == 'main-menu-links') {
      $pid = variable_get('menu_main_links_source', 'main-menu');
    $tree = menu_tree($pid);
    return drupal_render($tree);
  }
  return theme_links($variables);
}
