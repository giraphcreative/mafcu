// onload emergency bar handling
jQuery(document).ready(function($) {

    $('.emergency-container').each(function() {
        var bar = $(this);
        var identifier = bar.data('id');
        var shown = localStorage.getItem(identifier);
        if (shown == null) {
            bar.addClass('show');
            bar.find('.close').click(function() {
                bar.removeClass('show');
                localStorage.setItem(identifier, 'true');
            });
        }
    });

});