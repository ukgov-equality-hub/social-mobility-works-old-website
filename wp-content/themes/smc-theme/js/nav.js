jQuery(function() {
    var navOut = false,
    
    pull = jQuery('header button.hamburger'),
    menu = jQuery('#primary-navigation'), 
    overlay = jQuery('#nav-overlay'),
    scrollto = jQuery('.scroll-button');

    function openNav(){
      pull.addClass('is-active');
      menu.addClass('is-active');
      navOut = true;
    }


    function closeNav(){
      pull.removeClass('is-active');
      menu.removeClass('is-active');
      navOut = false;
    }


    jQuery(pull).on('click', function(event) { 
      event.preventDefault(); 
      (pull.hasClass('is-active') === true) ? closeNav() : openNav();
    });
 

    
});