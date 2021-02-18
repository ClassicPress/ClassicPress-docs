# FAQ and Support

## End Users

### What is new/different in ClassicPress v1?

Details of the changes in ClassicPress v1 are available in on our [forums](https://forums.classicpress.net/t/classicpress-1-0-0-aurora-release-notes/910).

### Will my current plugins and themes work with ClassicPress?

All current plugins and themes which work in WordPress 4.9.x, will work in ClassicPress v1. If you're experiencing something different, that's possibly a bug with ClassicPress, and we'd appreciate you reporting it in the [support forums](https://forums.classicpress.net/c/support), [Slack](https://www.classicpress.net/join-slack/), or [GitHub](https://github.com/ClassicPress/ClassicPress/issues).

There have also been a few occasions where a plugin update has broken compatibility with both WordPress 4.9.x and ClassicPress. Whatever the case may be, we recommend contacting the plugin developers and asking them to make their plugin compatible with WordPress 4.9.x (and therefore ClassicPress).

### I think I found a bug – what do I do?

Bugs can be reported on the [support forums](https://forums.classicpress.net/c/support) or, if you know how to write a bug report, via GitHub. If logging via GitHub, please make sure to follow the template instructions:

- For issues with ClassicPress itself, [open an issue here](https://github.com/ClassicPress/ClassicPress/issues/new).
- For issues with the Migration plugin, [open an issue here](https://github.com/ClassicPress/ClassicPress-Migration-Plugin/issues/new).

### I need help with something else, what should I do?

If you have an issue with ClassicPress that you'd like some help resolving, go to our [support forum](https://forums.classicpress.net/c/support) and make a new topic. Be sure to search existing posts first to make sure your question hasn't already been answered.

If you just have a question or want to chat with us about something, you can [join our Slack group](https://www.classicpress.net/join-slack/).

Please remember that like all of ClassicPress, our support is a volunteer effort by the community. If you are able to help answer support questions in the forum, that is also more than welcome!


## Developers

### Will the plugins and themes I've created work with ClassicPress?

If your plugin or theme works with WordPress 4.9, it will work with ClassicPress without changing a thing. However, there are one or two things you should be aware of and these are outlined in the following sections.

### What do I need to know in order to develop for ClassicPress?

First of all, [our roadmap](https://www.classicpress.net/roadmap/) does not include making any fundamental changes to the way WordPress functioned for many years, and the way ClassicPress functions now. This means that the best skill you can use or acquire as a ClassicPress developer is to "learn PHP deeply", and the rest of the technologies that have traditionally been used in WordPress development are still very relevant (SQL, HTML, the template system for themes, CSS, JavaScript, jQuery, etc.)

Second, ClassicPress itself and ClassicPress plugins and themes make heavy use of GitHub (and other `git` repository providers) for code hosting, and `git` for manipulating code locally. If you're not familiar with these technologies yet, we have a [series of tutorials](https://www.classicpress.net/blog/github-desktop-a-really-really-simple-tutorial/) that provide an introduction to GitHub Desktop. We recommend exploring these systems as you're able, because we believe they represent the best way to organize and develop source code that is currently available with wide adoption among developers as a general group.

Finally, we do also have some [exciting features](https://www.classicpress.net/roadmap/) planned for version 2 and beyond, but they will all be optional and fully backwards-compatible in order to minimize the disruption to ClassicPress users and developers.

### How can I indicate my plugin/theme is compatible with ClassicPress?

Plugins and themes should be tagged <em>ClassicPress</em> to allow users to easily find them when searching on the wordpress.org site or repositories via the ClassicPress admin panel.

A number of plugins have already been tagged as compatible with ClassicPress and can [easily be found](https://wordpress.org/plugins/search/classicpress/) in the WordPress Plugin Repository.

Please also be sure to set the `Requires at least` field in your plugin's main file to `4.9` or lower. This indicates that your plugin is compatible with WordPress `4.9` and therefore with ClassicPress.

Lastly, you should publish a thread in the [Plugin Release](https://forums.classicpress.net/c/plugins/plugin-release/70) category on our forums. In your first post, it would be helpful to tell us a bit about yourself such as your background as a developer and why you want to work with ClassicPress. Then tell us about your plugin or theme, how the ClassicPress community can go about getting support, and any other relevant details.

