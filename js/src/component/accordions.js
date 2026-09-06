// tab controls
jQuery(document).ready(function($) {

    if ($('.accordions').length) {

        $('.accordions .accordion .accordion-handle').click(function() {
            console.log('test');
            $(this).parent('.accordion').toggleClass('open');
        });

    }

});