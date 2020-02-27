# Installing with Composer

You can use `composer` to install recent release versions of ClassicPress as well as nightly builds.

This is a good option if you want to automate more steps of the installation process.

Below you can find instructions for installing the latest **release version** and the latest **nightly build** using `composer`, as well as what to do after that to end up with a working site.

## Installation steps (official releases)

1. Create a `composer.json` file in your root directory
2. Copy the following code into the `composer.json` file:

    ```js
    {
        "repositories": [
            {
                "type": "composer",
                "url": "https://wpackagist.org"
            }
        ],
        "require": {
            "classicpress/classicpress": "~1.0"
        },
        "extra": {
            "wordpress-install-dir": "classicpress"
        }
    }
    ```

  **NOTE 1:** The `wpackagist.org` repository allows you to install WordPress plugins using `composer` (documentation about this feature coming soon). If you don't need this functionality, then you can remove this section.

  **NOTE 2:** You probably want `~1.0` as a version specifier ([more info](https://getcomposer.org/doc/articles/versions.md#tilde-version-range-)). This will get you the latest version of ClassicPress 1.x. This release series is long-term supported and guaranteed to remain compatible with WordPress 4.9.x.
3. In a terminal window, run `composer install` in your project directory.
4. Set up your web server to serve only the `/classicpress/` directory from this project.
5. You can visit the site and follow the normal installation process. Or, to realize all the benefits of installing with `composer`, like being able to manage plugins and themes using your `composer.json` file, see the [After installation](#after-installation) section of this document.

## Installation steps (nightly)

The steps are mostly the same, but you need to define the `ClassicPress-nightly` repository in your `composer.json` file. Here is a sample `composer.json` with these changes:

```js
{
    "repositories": [
        {
            "type": "composer",
                "url": "https://wpackagist.org"
        },
        {
            "type": "vcs",
            "url": "https://github.com/ClassyBot/ClassicPress-nightly.git"
        }
    ],
    "require": {
        "classicpress/classicpress": "@beta"
    },
    "extra": {
        "wordpress-install-dir": "classicpress"
    }
}
```

Note: when running `composer install`, you will be prompted to create a GitHub API token due to the large number of tags in the `ClassicPress-nightly` repository.

## After installation

The installation process for ClassicPress installed via `composer` is not the same as a regular ClassicPress site. In order to manage plugins and themes using `composer.json` you'll need to make some changes to the file layout. For more information, see [this comment on GitHub](https://github.com/ClassicPress/ClassicPress/issues/218#issuecomment-440352654).

Or, you can try out [Bedrock by Roots](https://github.com/roots/bedrock), which is a WordPress boilerplate that uses `composer` under the hood and also works fine with ClassicPress. Here's how to create a new site this way and switch it over to ClassicPress:

```sh
composer create-project roots/bedrock my-site
cd my-site
composer remove roots/wordpress
composer require classicpress/classicpress:~1.0
```

Then, edit your `wp-config.php` file (which can be found in the `web/` subdirectory of your project) and fill in the required values. Serve your site from the `web/` subdirectory only: do not expose the files in the main project directory via your web server.

## Configuration changes

A common use of a `composer`-based installation workflow is to keep core and all plugins and themes up to date in a development environment, and then deploy everything to production at once.

If this is what you have in mind, you'll probably want to disable ClassicPress' built-in auto-updates by adding the following line to your wp-config.php file:

```php
define( 'WP_AUTO_UPDATE_CORE', false );
```

There are various other changes you can make to the automated update functionality according to your preferred setup. See [this post](https://make.wordpress.org/core/2013/10/25/the-definitive-guide-to-disabling-auto-updates-in-wordpress-3-7/) for more details.

Other changes that are also probably a good idea:

- Using filesystem permissions, do not allow ClassicPress to write to any directories outside `wp-content/uploads`. Instead, set up a separate deploy process to make changes to the core software and plugins/themes. This makes many common attacks and other problems impossible.
- Make sure the `composer.json`, `composer.lock`, and other files in the project root directory are not publicly accessible from the web server. The easiest way to do this is to make sure your web server is only hosting files from the subdirectory listed as the wordpress-install-dir in your `composer.json` file.

## Migrating from WordPress

ClassicPress uses the same file and folder structure as WordPress, so if you already have a working `composer`-based WordPress installation, you can switch it over to ClassicPress very easily. Just remove your WordPress package (probably `johnpbloch/wordpress` or `roots/wordpress`) and install `classicpress/classicpress` instead.
