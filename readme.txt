=== Responsible ===
Contributors: scottsweb, codeforthepeople
Tags: responsible, responsive, viewport, resizer, resizing, iphone, device, test, admin, bar, admin bar
Requires at least: 3.8
Tested up to: 4.2.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Viewport resizing comes to the WordPress admin bar.

== Description ==

Test your responsive website from the WordPress admin bar. This plugin uses the excellent [Viewport Resizer bookmarklet](http://lab.maltewassermann.com/viewport-resizer/) to add a responsive button to the WordPress admin bar. Once pressed you can easily test your site in a range of common viewport sizes (e.g. iPhone, Tablet and Desktop).

The plugin is handy for testing during development and also for writers and editors to preview their content on different devices.

Banner illustration above by [Gemma Garner](http://gemmagarner.com/ "WordPress design and illustration").

[a plugin by Scott Evans](http://scott.ee/ "WordPress web design Hampshire")

== Installation ==

To install this plugin:

1. Upload the `responsible` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. That's it!

Alternatively you can search for the plugin from your WordPress dashboard and install from there.

== Frequently Asked Questions ==

= Hooks & Filters =

The plugin has one filter that allows you register a custom bookmarklet. You can generate your own [here](http://lab.maltewassermann.com/viewport-resizer/).

`add_filter('responsible_bookmarklet', 'custom_bookmarklet');

function custom_bookmarklet() {
    return '';  // add your generated JS/HTML here
}
`

== Screenshots ==

1. Admin bar button with activated viewport resizer toolbar
2. Viewing a website at iPhone dimensions

== Changelog ==

= 1.1 =
* Only load CSS assets when admin bar is visible

= 1.0 =
* Initial release







