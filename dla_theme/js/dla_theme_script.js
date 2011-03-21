Drupal.behaviors.dla_themeSuperfish = function (context) {
    $("#dla-nav-menu").superfish({
            hoverClass:  'sfHover',
            delay:       0,
            animation:   {opacity:'none',height:'none'},
            speed:       'fast',
            autoArrows:  false,
            dropShadows: false,
            disableHI:   true
        }).supposition();
};