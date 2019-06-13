Atto button for Moodle App link filter plugin
====================================

This plugin makes it easier to apply the Moodle App link filter to links while using the Atto editor. It allows you to add a new button in the Atto toolbar to add these tags.

This plugin is meant to replace the default link button since it replicates all its features and adds some new ones.

# To Install it manually #

- Unzip the plugin in the moodle .../lib/editor/atto/plugins/ directory. Please notice that this plugin requires the [Moodle App link filter plugin](https://github.com/dpalou/moodle-filter_applink) to be installed.
- Enable it from "Site Administration >> Plugins >> Text editors >> Atto toolbar settings". You should include the "applink" in the "Toolbar config". It's recommended to replace the "link" button with this one.

# To Use it #

- Once enabled, a link and unlink buttons will appear in the toolbar of the Atto editor.
- To create a link, follow the same steps as when you create a link using Moodle's default link button.
- In the new dialog you'll see some new options. To make the link open the Moodle app, enable the "Open in the app" checkbox. Additionally, you can specify the URL scheme to use, if it's left empty the default scheme will be applied.
- You can also add a username to use in the app. To do so, enable the "Add username" checkbox. Additionally, you can specify the username to use, if it's left empty the user viewing the link will be applied.

# See also #

- [Moodle App link filter plugin](https://github.com/dpalou/moodle-filter_applink)
- [Open the Moodle app from another app](https://docs.moodle.org/dev/Open_the_Moodle_app_from_another_app)
