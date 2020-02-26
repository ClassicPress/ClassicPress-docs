# Installing ClassicPress

In this guide we'll cover how to set up two main types of ClassicPress sites: [installing ClassicPress on a new site](#fresh-install), and [migrating an existing WordPress site to ClassicPress](#migrate-classicpress).
**NOTE:** Some hosts automatically update WordPress sites to the latest version, and currently it is possible for ClassicPress sites to trigger this update process. Please contact your hosting provider's support team to make sure your site will not be automatically updated to a later WordPress version. See our [Updating ClassicPress page](https://docs.classicpress.net/updating-classicpress/#automatic-updates-from-web-hosts) for more information.

## How to do a fresh install of ClassicPress

Installing ClassicPress is the first step of your ClassicPress journey. The process in itself will typically take you about five minutes if you are experienced with installing similar web CMS's. However, should this be your first time installing a CMS on your server, don't worry. We'll take you through each of the steps in detail — and if there's any problem along the way, don't hesitate to [call on the community](https://docs.classicpress.net/faq-support/). Before you start, you'll need a few things in order to make the installation process as smooth as possible. We recommend collecting this information ahead of time.

### Server or shared hosting environment

This is a place to store your site's files and content so that the site is visible to the world. The hosting environment usually comes with a domain name.

If you don't have a domain name or a web host yet, we recommend taking a look at our [hosting subforum](https://forums.classicpress.net/c/general-discussion/hosting-forum). This is a place for community discussion rather than official recommendations, but here you can find lots of information about which hosts work well with ClassicPress.

You can also install ClassicPress on your local computer. A site made this way will not be accessible to the public, but it's great for trying out ClassicPress and its features. In order to do this, you'll need to install a **web server program**. [DesktopServer by ServerPress](https://serverpress.com/) or [Local by Flywheel](https://local.getflywheel.com/) are good options if you haven't done this before.

### Program to copy files to the server

If you're installing ClassicPress on a hosting environment or another remote server, you'll need to use a program to copy files back and forth. We recommend getting an [SSH](https://en.wikipedia.org/wiki/Secure_Shell) account set up with your hosting provider and using this account to copy files via [SFTP](https://en.wikipedia.org/wiki/SSH_File_Transfer_Protocol). ([FTP](https://en.wikipedia.org/wiki/File_Transfer_Protocol) is also an option, but we do not recommend it because it **does not use a secure, encrypted connection** to transfer files.) [FileZilla](https://filezilla-project.org/) is one program that can copy files to and from almost any server or shared hosting environment. [CyberDuck](https://cyberduck.io/download/) is another.

### MySQL or MariaDB database

Usually your hosting provider will set this up for you, and you'll need the **database name**, **username** and **password** for the database.

### Installation steps

Once you have all of the above requirements met, you should be able to proceed with the installation.

1. Download the zip file for the latest version of ClassicPress from [our GitHub releases page](https://github.com/ClassicPress/ClassicPress-release/releases/latest).
2. Unzip the file on your local computer.
3. Upload the unzipped folder to your server (using either SFTP or FTP).
4. Create a database for ClassicPress (contact your web host if you aren't sure how to do this).
5. Run the ClassicPress Install by going to the domain name associated with your site.
6. Fill in the required information requested, including the database information set up in Step 4.

### Installing with Composer

You can use `composer` to install recent ClassicPress releases as well as nightly builds. This is a good option if you want to automate more steps of the installation process. For more details, visit the [Installing with Composer](https://docs.classicpress.net/installing-classicpress/installing-with-composer/) page.

## How to migrate from WordPress to ClassicPress

You can migrate sites from WordPress to ClassicPress using our [ClassicPress migration plugin](https://github.com/ClassicPress/ClassicPress-Migration-Plugin/releases/latest).

Migrating from WordPress to ClassicPress **does not** touch your site content (posts, pages, CPTs, themes, plugins, uploads), anything else in your database, `wp-config.php`, `.htaccess`, etc. It only replaces the core WordPress files, most of which are in the `wp-admin` and `wp-includes` directories.

### Supported WordPress versions

This plugin currently supports migrating from WordPress versions starting at `4.9.0`.

We update the plugin as quickly as possible when a new version of WordPress comes out, but we do need to test each new version for compatibility with the plugin first.

If you would like to migrate from a different version of WordPress **at your own risk**, you can use the following code in your current theme's `functions.php` file or an `mu-plugin` to enable the migration (more details available [on the plugin's readme page](https://github.com/ClassicPress/ClassicPress-Migration-Plugin#how-can-i-use-this-plugin-with-an-unsupported-version-of-wordpress)):

`add_filter( 'classicpress_ignore_wp_version', '__return_true' );`

With each new WordPress release, it's very helpful for us to have multiple reports of whether the migration plugin works with the new version. You can use the filter above to test the migration process, and you can tell us about the results of your testing [on GitHub](https://github.com/ClassicPress/ClassicPress-Migration-Plugin/issues) or [on the support subforum for the migration plugin](https://forums.classicpress.net/c/support/migration-plugin).

### Migration steps

To migrate a current WordPress site to ClassicPress, follow these steps:

1. **PLEASE NOTE:** Please check that any known conflicting plugins are **deactivated** (see list below).
2.  Backup the current site — you can do a manual backup in your hosting panel and export the database or you can use some of the recognized backup plugins like [BackUpWordPress](https://wordpress.org/plugins/backupwordpress/), [iThemes BackupBuddy](https://ithemes.com/purchase/backupbuddy/), or [UpdraftPlus](https://updraftplus.com/) to do this.
3. Download the latest version of the ClassicPress migration plugin from [the plugin's GitHub releases page](https://github.com/ClassicPress/ClassicPress-Migration-Plugin/releases/latest).
4. Upload the plugin using the WordPress plugins section of your site.
5. Activate the ClassicPress migration plugin.
6. Go to the settings of the ClassicPress migration plugin at Tools -&gt; Switch to ClassicPress.
7. To proceed with the switch it is necessary that all pre-flight checks succeed, with a green check mark.
8. Press the **Switch this site to ClassicPress now!** button.
9. The migration process may take a few minutes depending on your hosting provider, so go grab some water or a beverage of your choice :)
10. When the process is finished, you should see the ClassicPress About screen. At this point it is safe to delete the "Switch to ClassicPress" plugin.

If you have any problems with the migration process, please make a new thread on our [support forum](https://forums.classicpress.net/c/support/migration-plugin).

In the future, the same migration plugin will allow you to restore your site back to your previous version of WordPress. We would love your help getting this feature implemented. For more information, see [the GitHub issue for restoring back to WordPress](https://github.com/ClassicPress/ClassicPress-Migration-Plugin/issues/27).

### Migrating to ClassicPress without using the plugin

Again, **DO NOT DO THIS ON A PRODUCTION ENVIRONMENT**.

1. **Back up your site files and database**. This is especially important when you are migrating files by hand.
2. Download the latest ClassicPress zip file from our [GitHub releases page](https://github.com/ClassicPress/ClassicPress-release/releases).
3. Unzip the file on your local computer.
4. On your local computer, remove the `wp-config-sample.php` file and remove the entire `wp-content` folder.
5. Upload what's left over to your server, replacing the existing files (using either SSH or an application like [CyberDuck](https://cyberduck.io/download/) or [FileZilla](https://filezilla-project.org/)).
6. Visit your new ClassicPress site.

## Plugin conflicts

The following plugins have been reported to conflict with the ClassicPress migration plugin or with ClassicPress itself:

* **WP Config File Editor** — reported to conflict with the migration process. Disable it before proceeding with the migration.
* **Disable WP Core Updates Advance** — reported to conflict with the migration process. Disable it before proceeding with the migration.
* **Disable All WordPress Updates** — reported to conflict with the migration process. Disable it before proceeding with the migration.
* **WP Downgrade | Specific Core Version** — reported to conflict with the migration process. Disable it before proceeding with the migration.
* **Wordfence** - Wordfence doesn't know how to scan ClassicPress core files for changes yet. After installing ClassicPress, uncheck this option: *Scan Options → General Options → Scan core files against repository versions for changes*. There will also be a few more errors if you have the *Scan wp-admin and wp-includes for files not bundled with WordPress* option enabled, because ClassicPress has added new files. Currently this is normal and expected.

## Updating ClassicPress

For more information about updating ClassicPress to the latest version, see the [Updating ClassicPress page](https://docs.classicpress.net/updating-classicpress/).
