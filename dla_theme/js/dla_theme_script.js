Drupal.behaviors.dla_themeSuperfish = function (context) {
    $("#dla-nav-menu > ul").superfish({
            hoverClass:  'sfHover',
            delay:       0,
            animation:   {opacity:'none',height:'none'},
            speed:       'fast',
            autoArrows:  false,
            dropShadows: false,
            disableHI:   true
        }).supposition();
};