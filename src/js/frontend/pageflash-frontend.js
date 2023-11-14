jQuery(document).ready(function ($) {
    // Check if Quicklink is defined
    if (typeof quicklink !== 'undefined') {
        // Quicklink is available, you can use it here
        window.addEventListener('load', () => {
            quicklink.listen(quicklinkSettings);
        });
    }
});
