// onload
jQuery(document).ready(function($) {

    var search_toggle = $(".search .search-toggle");
    search_toggle.on('click', function() {
        $(".search .search-form").toggleClass('visible');
    });

});