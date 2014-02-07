/**
 * Behaviors for main menu.
 */
(function($) {

  /**
   * Adds main-menu-links id and main-menu-sub-links class to main menu ul elements.
   */
  Drupal.behaviors.storytellingMenu = {
    attach: function (context, settings) {

      $('#main-menu ul.menu:first').attr("id", "main-menu-links");

      if ($('#main-menu ul.menu ul')!== undefined) {
        $('#main-menu ul.menu ul').addClass("main-menu-sub-links");
      }
    }
  }
})(jQuery);

