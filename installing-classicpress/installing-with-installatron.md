# Installing with Installatron

[&larr; Back](https://docs.classicpress.net/installing-classicpress/)

## Installing a new ClassicPress website using Installatron

![Installatron support ClassicPress](https://www.classicpress.net/wp-content/uploads/2019/11/installatron-supports-classicpress.jpg)

**BEFORE INSTALL: Make sure your hosting supports PHP 7.0 or above, recommended when installing ClassicPress**

### Step 1: Getting started

Navigate to the Application browser of Installatron.

![Installatron applications browser](https://www.classicpress.net/wp-content/uploads/2020/01/step-1-tron-800x223.png)

Once there, select the ClassicPress icon.

![Installatron dashboard showing ClassicPress icon](https://www.classicpress.net/wp-content/uploads/2020/01/step-1-2-tron-800x342.png)

Click “Install this application” in the right corner.

![Installatron install this application](https://www.classicpress.net/wp-content/uploads/2020/01/step-1-3-tron-800x411.png)

### Step 2: Settings

Now, fill in the Location and Version.

![Installatron install wizard](https://www.classicpress.net/wp-content/uploads/2020/01/step-2-tron-2-697x500.png)

Under Location you fill in the Domain name you want to use and optionally the directory in which you want ClassicPress to be placed.

Under Version you pick the ClassicPress Version, Language and Automatic Update settings. If you are not sure what update setting you should pick, “Update new minor versions and security releases” is probably the one you need.

After this you need to fill in the Settings and Advanced settings.

![Installatron website settings page](https://www.classicpress.net/wp-content/uploads/2020/01/step-2-2-tron-800x385.png)

Under Settings you chose your admin’s Username, Password and Email. You also pick your site’s Title and Tagline.

After this you can decide whether you want to fill in the Advanced settings yourself or let Installatron do it for you. If you let Installatron do it, you can now click on “Install” and go to Step 3, otherwise go to Step 2b.

### Step 2b: Advanced settings

In the Advanced settings you can configure some extra settings for your ClassicPress installation like Database, Notifications and Backups

![Installatron advanced settings](https://www.classicpress.net/wp-content/uploads/2020/01/step-2-5-tron-676x500.png)

Under the Database settings you can fill in an existing database. Fill in the username and password to give Installatron access. It also allows you to pick a prefix for your table. You do not need to change this, but it is helpful to change it to something unique if you are already running other ClassicPress sites from the same Database.

The other Advanced settings allow you to pick what email notifications to receive, where automatic back-ups are stored and how often back-ups should be made.

When all of this has been filled in, you can click “Install”.

### Step 3: Wait

Now simply wait for this progress bar to fill up

![Copying database and tables](https://www.classicpress.net/wp-content/uploads/2020/01/step-3-tron-2-1-800x147.png)

Once the above turns into:

![Installatron installation complete](https://www.classicpress.net/wp-content/uploads/2020/01/step-3-2-tron-2-800x139.png)

You are done.

---

## Moving existing sites to Installatron

![Installatron support ClassicPress](https://www.classicpress.net/wp-content/uploads/2019/11/installatron-supports-classicpress.jpg)

If you currently have an existing site and want to move it into Installatron, here is how you do it.

You may want to do this under the following circumstances:

*   You have an existing site that was originally installed as a WordPress site by Installatron, but you’ve migrated this site to ClassicPress.
*   You have an existing ClassicPress site, and you’d like to manage its updates using Installatron.

### Step 1: Remove it from the current management system

If you have a site installed in Installatron as a WordPress site, you will first need to remove it from the existing management system so that Installatron doesn’t detect your ClassicPress site incorrectly and prompt you to “upgrade WordPress”.

If your site was not installed by Installatron as a WordPress site, then you can skip this step.

Go to your application.

![Installatron](https://www.classicpress.net/wp-content/uploads/2019/11/screenshot12-800x279.png)

Click on the **Advanced** tab.

![Installatron advanced tab](https://www.classicpress.net/wp-content/uploads/2019/11/screenshot11-800x183.png)

Click the checkbox to remove the application from Installatron and click **Save All**.

![Remove from Installatron](https://www.classicpress.net/wp-content/uploads/2019/11/screenshot9-800x137.png)

### Step 2: Navigate to ClassicPress

Now, select the Installatron Applications Installer option from your control panel and go to the Application Browser. Choose ClassicPress from the Content Management section.

![Migrate to installatron 3](https://www.classicpress.net/wp-content/uploads/2019/11/migrate-to-installatron3-800x436.png)

### Step 3: Run the import

You will be importing an existing application, so choose this option from the menu to the right of the big **Install this application** button.

![Migrate to installatron 4](https://www.classicpress.net/wp-content/uploads/2019/11/migrate-to-installatron4-800x353.png)

Choose the **Continue** button under **From this account**.

![Migrate to installatron 5](https://www.classicpress.net/wp-content/uploads/2019/11/migrate-to-installatron5-800x392.png)

Then make sure the domain name format is correct (http or https, www or non-www, etc). When you have all the details correct, click the **Import** button (you can always change the details later).

![Migrate to installatron 6](https://www.classicpress.net/wp-content/uploads/2019/11/migrate-to-installatron6-800x353.png)

You should now be presented with a screen showing the details of your application. Congratulations… your ClassicPress site is now being recognized and correctly managed _as a ClassicPress site_ by Installatron.

![Migrate to installatron 7](https://www.classicpress.net/wp-content/uploads/2019/11/migrate-to-installatron7-800x343.png)

[&larr; Back](https://docs.classicpress.net/installing-classicpress/)
