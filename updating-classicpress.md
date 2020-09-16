# Updating ClassicPress

If you've previously installed ClassicPress `1.0.0-alpha1` or an early nightly build (`20181120` or older), then you'll need to follow the manual update process in order to update ClassicPress to the latest version.

Once you are on ClassicPress version `1.0.0-beta1` or higher, the ClassicPress update mechanism will take over and prompt you to keep your site updated. (If you're not sure which version of ClassicPress you're running, you can find out by visiting any page in the admin dashboard of your site, and scrolling down and looking in the bottom right corner.)

## Automatic updates from web hosts

Some hosting providers do not recognize ClassicPress automatic updates yet! Until this is resolved, hosting providers may prompt you to update your site to the latest version of WordPress instead.

After installing ClassicPress, please contact your hosting provider and ask them to **disable** automatic WordPress updates, and **add support for ClassicPress automatic updates**. The more users we have requesting this fix, the more quickly hosts will be able to get it done.

- **SiteGround**: Contact support and ask them to disable automatic WordPress updates and add support for ClassicPress automatic updates. More info [on their support site](https://www.siteground.com/tutorials/wordpress/siteground-autoupdate/#Skip_or_Disable_the_Autoupdate).
If you have more information about how a specific host handles automatic updates, please [start a thread on our support forum](https://forums.classicpress.net/c/support) so that we can update this document.

## Updating ClassicPress manually
	
Before doing anything else, **back up your site files and database**. This is especially important when you are updating files by hand.

1. Download the latest ClassicPress zip file from our [GitHub releases page](https://github.com/ClassicPress/ClassicPress-release/releases).
2. Unzip the file on your local computer.
3. On your local computer, remove the wp-config-sample.php file and remove the entire wp-content folder.
4. Upload what's left over to your server, replacing the existing files (using either SSH or an application like [CyberDuck](https://cyberduck.io/download/) or [FileZilla](https://filezilla-project.org/)).
5. Visit your newly upgraded ClassicPress site.
You may also want to have a look at the corresponding WordPress update page. These instructions are mostly still relevant to ClassicPress, and there are some helpful tips there: [https://codex.wordpress.org/Updating_WordPress#Manual_Update](https://codex.wordpress.org/Updating_WordPress#Manual_Update)

## Updating ClassicPress automatically

If your ClassicPress version number is `1.0.0-beta1` or higher, then you will be automatically prompted to upgrade to a newer release if one is available.

If your ClassicPress version number is `1.0.0-rc1` or higher, then your site will automatically upgrade to later versions in the 1.x release series by default.

You can modify the behavior of automatic upgrades setting using the [same method as in WordPress](https://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/) (by defining the `WP_AUTO_UPDATE_CORE` constant in your config file, or by installing plugins that modify this functionality).

**NOTE: If you disable automatic updates, you may be leaving your site vulnerable to hackers**.

Automatic updates help us ensure that your sites are safe **after** we release new security fixes and the details become available to the public. To put it another way, you want the window between _public release of a security issue_ and _the fix being live on your site_ to be **as short as possible**.

ClassicPress automatic upgrades are **guaranteed** not to contain breaking changes by our [versioning policy](https://semver.org/), and ClassicPress will **never** automatically upgrade between versions that may contain breaking changes (e.g. `1.1.0` to `2.0.0`).
