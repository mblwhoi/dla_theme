Drupal.behaviors.dla_themeSuperfish = function (context) {
    $("#dla-nav-menu").superfish({
            hoverClass:  'sfHover',
            delay:       200,
            speed:       'fast',
            autoArrows:  false,
            dropShadows: false,
            disableHI:   true
        }).supposition();
};
