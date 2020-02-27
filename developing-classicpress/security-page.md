# Security Page

## Overview

The Security page is the first visible step in improving the overall approach to security in ClassicPress. Its purpose is to solve two related problems: **discovery** and **auditing**.

Most plugins are organised around their core purpose; after all, that purpose is the reason they were installed. Unfortunately this leads to poor discoverability of security-related settings — they may be in there somewhere, there may be none at all — without looking through everything there’s no way to know.

Currently, auditing the overall security profile of a ClassicPress site is impractical if there are more than a few plugins. Having all security-related settings from all plugins in one place means those settings can be audited far more easily, as the time taken will be proportional to the number of settings, not the number of places to look for those settings.

## API

There is just one new function: `add_security_page()`. It works similarly to the other `add_xxx_page()` helpers, with two important changes:

- there is no `$capability` argument — it is always `manage_options`
- the `$menu_slug` must match an active plugin or mu-plugin slug.
- The function also adds a link from your plugin’s action row in the plugins list directly to your security page.

```php
/**
 * Add submenu page to the Security main menu.
 *
 * The function which is hooked in to handle the output of the page must check
 * that the user has the required capability as well.
 *
 * @param string   $page_title The text to be displayed in the title tags of
                               the page when the menu is selected.
 * @param string   $menu_title The text to be used for the menu.
 * @param string   $menu_slug  The slug name to refer to this menu by; must
                               match an active plugin or mu-plugin slug.
 * @param callable $function   The function to be called to output the content
                               for this page.
 * @return false|string The resulting page's hook_suffix, or false if the user
                        does not have the 'manage_options' capability.
 */
function add_security_page(
	$page_title,
	$menu_title,
	$menu_slug,
	$function = ''
)
```

## Usage

You will need to change the logic in your plugin to check for `add_security_page()`. For example:

```php
if ( function_exists( '\add_security_page' ) ) {
	add_security_page(
		'My Prodigious Plugin',
		'My Menu Title',
		'my-prodigious-plugin',
		'my-output-function'
	);
} else {
	// existing code
}
```

You will also need to change the logic on your settings pages, but that is outside the scope of this guide. However, you should remember that the idea is to **move** security-related settings, **not** to *duplicate* them.

### $menu\_slug

>The slug name to refer to this menu by; must match an active plugin or mu-plugin slug.

This works differently from the other helper functions and is the most common "gotcha". The simplest way to ensure this works as intended is to use something like this in the plugin's main file:

```php
$menu_slug = dirname( plugin_basename( __FILE__ ) );
```

Ensure `$menu_slug` is in scope when you use it.

## Security Plugins

If your plugin has nothing but security-related settings it may be more useful to provide a summary of the current settings, with links to where they can be changed.

## Plugin Action Links

Many plugins add links to the plugin’s action row in the plugins list. You can declutter that area for your plugin by using a standard dashicon; for example, a typical "Settings" link:

```php
array_unshift(
    $links,
    sprintf(
        '<a href="%s?page=my-prodigious-plugin" title="%s">%s</a>',
        admin_url( 'admin.php' ),
        __( 'Settings' ),
        function_exists( '\add_security_page' )
            ? '<span class="dashicon dashicons-admin-generic"></span>'
            : __( 'Settings' )
    )
);
```

Combined with registering a security page using `add_security_page`, this provides easy navigation for users with a clean, professional look that doesn't take up too much space:

<img class="alignnone wp-image-413 size-full" src="https://docs.classicpress.net/wp-content/uploads/sites/4/2019/09/wp-fail2ban-screenshot.png" alt="" width="848" height="79" />

## Contacting Plugin Authors

Many security plugins and plugins with security-related settings have not been updated for the ClassicPress security page system yet.

If you've installed and activated a plugin with security-related settings, but they're not showing up in the security page, we encourage you to contact the plugin author and ask them to register their settings using the `add_security_page()` function documented on this page.

You can usually find the author's contact information from the plugin's links in the dashboard or from the plugin's page on WordPress.org.
