jQuery(document).ready(function ($) {
    // Check if Quicklink is defined
    if (typeof quicklink !== 'undefined') {
        // Quicklink is available, you can use it here

        let quicklinkSettings = window.quicklinkSettings;
        window.addEventListener('load', () => {
            quicklink.listen(quicklinkSettings);
        });
    }
});
