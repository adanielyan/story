<?php

function storytelling_menu_tree__main_menu($variables) {
  dpm($variables);
  if (preg_match("/\bexpanded|collapsed\b/i", $variables['tree'])){
    return '<ul id="main-menu-links" class="clearfix">' . $variables['tree'] . '</ul><a href="#" id="menu-toggle">Menu</a>';
  } else {
    return '<ul class="main-menu-sub-links clearfix">' . $variables['tree'] . '</ul>';
  }
}

