//navbar size changing
jQuery(document).ready(function() {
    jQuery(document).on("load", function() {
        if(jQuery(document).scrollTop() > 200) {
            getSmall();
        }
    });
    jQuery(document).on("scroll", function() {
        menuHighlight();
        if(jQuery(document).scrollTop() > 200) {
            getSmall();
        } else {
            jQuery("header").removeClass("small");
            jQuery(".header-bottom").removeClass("small");
            jQuery(".search-wrap").addClass("search-large");
            jQuery(".main-navigation").css("padding", "25px 0px");
            jQuery(".logo").removeClass("logo-move");
            jQuery(".website-name").addClass("website-move");
        }
    });
});
//change navigation menu to small
function getSmall() {
    jQuery("header").addClass("small");
    jQuery(".header-bottom").addClass("small");
    jQuery(".search-wrap").removeClass("search-large");
    jQuery(".main-navigation").css("padding", "0px");
    jQuery(".logo").addClass("logo-move");
    jQuery(".website-name").removeClass("website-move");
}

//remove highlight from nav element if document is top
function menuHighlight() {
    if(jQuery("body").scrollTop() === 0) {
        jQuery(".current-flash-item").removeClass("current-flash-item");
    }
}