const passwordInput = document.querySelector('#password');
const toggleButton = document.querySelector('.toggle-password-mask');

toggleButton.addEventListener('click', () => {
    // Check the current type of the password field
    const isMasked = passwordInput.type === 'password';

    // Toggle the type attribute
    passwordInput.type = isMasked ? 'text' : 'password';

    // Update the button icon / text
    toggleButton.textContent = isMasked ? '🙈' : '👁️';

    // Update accessibility attributes
    toggleButton.setAttribute('aria-pressed', isMasked ? 'true' : 'false');
    toggleButton.setAttribute('aria-label', isMasked ? 'Hide password' : 'Show password');
});


// onload
jQuery(document).ready(function($) {

    // button click handler for download option - if that parameter is set.
    $(".olb-show").on('click', function(event) {

        // prevent the link from navigating to the href.
        event.preventDefault();

        // force download of the url to a specific filename.
        $('.online-banking').addClass('visible');
    })

});