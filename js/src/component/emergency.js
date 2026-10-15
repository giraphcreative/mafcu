// onload emergency bar handling
jQuery(document).ready(function($) {

    var bar = $('.emergency-container');
    var identifier = bar.data('id');
    var shown = localStorage.getItem(identifier);
    if (bar.length) {
        if (shown == null) {
            bar.addClass('show');
            bar.find('.close').click(function() {
                bar.removeClass('show');
                localStorage.setItem(identifier, 'true');
            });
        }
    }

});