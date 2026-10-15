jQuery(document).ready(function($) {

    $('body a:not(.previous):not(.next):not(.lightbox-iframe)').click(function(event) {

        // break the normal linking behavior
        event.preventDefault();

        // get the link
        var the_link = $(this);
        var the_link_href = the_link.attr('href');

        //console.log( the_link_href );

        // prompt the user and if they confirm the prompt, proceed to the third party site.
        if (the_link.hasClass('bypass') ||
            the_link_href.match(/mafcu.jpederson.io/i) ||
            the_link_href.match(/mafcu.giraph.io/i) ||
            the_link_href.match(/mafcu.org/i) ||
            the_link_href.charAt(0) === '#' ||
            the_link_href.charAt(0) === '/') {

            // go to the url in question if it's in the exceptions
            location.href = the_link_href;

        } else {

            // the default copy for the speedbump
            var copy = "You are about to leave Mid-Atlantic Federal Credit Union's website. Mid-Atlantic Federal Credit Union provides links to other web sites for your convenience and informational purposes. Linked sites are not under the control of Mid-Atlantic Federal Credit Union and Mid-Atlantic Federal Credit Union is not responsible for the content of any linked site.";

            if (the_link_href.match(/meridianlink.com/i) ||
                the_link_href.match(/firstbranchcms.com/i) ||
                the_link_href.match(/familysecurityplan.com/i)) {

                // this is a business partner link, so it gets different copy.
                copy = "You are about to leave Mid-Atlantic Federal Credit Union's website to be directed to a business partner site. Mid-Atlantic Federal Credit Union is not responsible for the web content, security or privacy policies of business partner sites.";

            }

            // do the confirmation
            if (confirm(copy)) {
                window.open(the_link_href, "_blank");
            }

        }

    });

});