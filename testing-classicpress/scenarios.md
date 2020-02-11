# Testing Classicpress Scenarios

**Welcome to the testing program.** We currently have two main ways to start testing ClassicPress:

- Installing ClassicPress on a current WordPress site
- Installing ClassicPress on a new site.

See the [Installing ClassicPress](https://docs.classicpress.net/installing-classicpress/) page for detailed instructions.

## Testing Scenarios

Once ClassicPress is installed, we have a suggested list of testing scenarios. You are also welcome to come up with your own!

### User Profiles

- Log in
- Create a new user with a specific role. Do this for a subscriber role and for an admin role.
- Check the user privileges match the role (e.g: use a subscriber user to see if it's possible to activate a plugin).

### Page/Post Content

- Create a new Page and add some content ( Title, Content )
- Save it and preview the page to see if the content and title match the one entered above.
- Delete the page.

### Plugins

- Add a new plugin from the plugin repository.
- Activate it and check that the plugin is active.
- Check if the plugin is working ( if possible ).
- Deactivate and delete the plugin.

### Themes

- Add a new theme from the theme repository.
- Activate it and check that the theme is active.
- Check if the theme is working, go to Appearance -> Customize and do some settings adjustments.
- Check if the adjustments are reflected in the frontend.
- Switch to another theme and delete the previous theme.

Any bugs that are found can be reported on the GitHub project pages.

You can report bugs in ClassicPress itself [on the ClassicPress GitHub repository](https://github.com/ClassicPress/ClassicPress/issues/new).

You can report bugs related to the ClassicPress migration plugin [on the GitHub repository for the plugin](https://github.com/ClassicPress/ClassicPress-Migration-Plugin/issues/new).

We are happy to help you through the process of reporting a bug as well, just send us a note on [Slack](https://www.classicpress.net/join-slack/) or [email](mailto:qa@classicpress.net).

## Disclaimer

_Testing for bugs shouldn’t be done in production sites or any other sites important to you or the organizations you may work for. Always take a backup of your site(s) first!_



