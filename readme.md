![Responsible](http://cloud.scott.ee/images/responsible.png)

# Responsible

* Status: ✔ Active
* Contributors: [@scottsweb](http://twitter.com/scottsweb)
* Description: Viewport resizing comes to the WordPress admin bar.
* Author: [Scott Evans](http://scott.ee)
* Author URI: [http://scott.ee](http://scott.ee)
* License: GNU General Public License v2.0
* License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

## About

Test your responsive website from the WordPress admin bar. This plugin uses the excellent [Viewport Resizer bookmarklet](http://lab.maltewassermann.com/viewport-resizer/) to add a responsive button to the WordPress admin bar. Once pressed you can easily test your site in a range of common viewport sizes (e.g. iPhone, Tablet and Desktop).

The plugin is handy for testing during development and also for writers and editors to preview their content on different devices.

Banner illustration above by [Gemma Garner](http://gemmagarner.com/ "WordPress design and illustration").

## Installation

To install this plugin:

* Upload the `responsible` folder to the `/wp-content/plugins/` directory
* Activate the plugin through the 'Plugins' menu in WordPress
* That's it!

Visit [WordPress.org for a comprehensive guide](http://codex.wordpress.org/Managing_Plugins#Manual_Plugin_Installation) on in how to install WordPress plugins.

## Hooks & Filters

The plugin has one filter that allows you register a custom bookmarklet. You can generate your own [here](http://lab.maltewassermann.com/viewport-resizer/).

```
add_filter('responsible_bookmarklet', 'custom_bookmarklet');

function custom_bookmarklet() {
    return '';  // add your generated JS/HTML here
}
```

## Frequently Asked Questions

...

## Changelog

####1.1
* Only load CSS assets when admin bar is visible

####1.0
* Initial release
