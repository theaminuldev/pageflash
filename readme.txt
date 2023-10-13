=== PageFlash - Fast and Efficient Headless Browser WordPress Plugin ===
Contributors: theaminuldev
Tags: headless-browser, pageflash, prefetches, quicklink, quickload, performance, speed, fast, prefetch, seo preconnect, optimization
Requires at least: 4.0
Tested up to: 6.0
Stable tag: 1.0
License: GPL-3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

By using PageFlash, an active plugin, you'll experience a 50% increase in conversions and enjoy 4x faster page show. 🚀" - NewEgg

== Description ==
PageFlash is a powerful headless browser WordPress plugin designed to provide you with a fast and efficient web browsing experience within your WordPress site. Say goodbye to page reloads and enjoy seamless navigation through web content with this plugin. Harness the speed and agility of PageFlash for your WordPress website.

### Key Features:
- **Lightning-Fast Browsing:** PageFlash lives up to its name, offering rapid page loading and navigation without the need for tedious page refreshes.
- **Smooth Script Execution:** Execute scripts and interact with web pages in a fluid and continuous manner. With PageFlash, you'll experience uninterrupted script execution, ensuring your web applications run seamlessly.
- **Prefetches:** PageFlash incorporates advanced prefetching technology to speed up your web browsing. It anticipates and loads pages in the background, reducing loading times and providing a smoother browsing experience.
- **No More Reloads:** Say goodbye to unnecessary page reloads with PageFlash, and enjoy uninterrupted web exploration. PageFlash ensures a frustration-free web experience by eliminating the need for page reloads, providing you with a streamlined and seamless browsing experience.

For more information and documentation, visit our [plugin documentation](https://theaminul.com/pageflash/docs).

### How it works:

- **Detects links within the viewport** (using [Intersection Observer](https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API))
- **Waits until the browser is idle** (using [requestIdleCallback](https://developer.mozilla.org/en-US/docs/Web/API/Window/requestIdleCallback))
- **Checks if the user isn't on a slow connection** (using `navigator.connection.effectiveType`) or has data-saver enabled (using `navigator.connection.saveData`)
- **Prefetches URLs to the links** (using [`<link rel=prefetch>`](https://www.w3.org/TR/resource-hints/#prefetch) or XHR). Provides some control over the request priority (can switch to `fetch()` if supported).

If you are a developer, we encourage you to follow along or [contribute](https://github.com/theaminuldev/pageflash) to the development of this plugin [on GitHub](https://github.com/theaminuldev/pageflash).

### Browser support:

This plugin also works perfectly on popular browsers.
- 🖥 Microsoft EDGE
- 🖥 Firefox 4+
- 🖥 Chrome
- 🖥 Opera
- 📱 Android 4+

== Installation ==

= To install the plugin via WordPress Dashboard: =

1. In your WordPress admin dashboard, go to "Plugins" and click "Add New."
2. Click "Activate."

= To install the plugin manually: =

1. Download the plugin ZIP file from the [PageFlash WordPress Plugin Page](https://wordpress.org/plugins/pageflash/).
2. Click the "Upload Plugin" button and select the ZIP file you downloaded.
3. Click "Install Now" and then "Activate."

== Frequently Asked Questions ==
1. **How do I enable PageFlash for a specific post or page?**
   After activation, go to the post or page where you want to enable PageFlash's headless browsing features. In the editor, look for the PageFlash settings panel to configure your preferences.

2. **Is PageFlash compatible with the latest version of WordPress?**
   Yes, PageFlash is regularly tested and ensured to be compatible with the latest WordPress version.

== Screenshots ==
1. [Screenshot 1](https://theaminul.com/pageflash/img): Describe the screenshot here.

== Changelog ==
= 1.0 =
* Initial release.

== Upgrade Notice ==
= 1.0 =
* Initial release.