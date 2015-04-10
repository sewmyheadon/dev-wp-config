# Development wp-config.php setup for WordPress

### Summary
A developer's setup for `wp-config.php` files that will accommodate:

+ Local development servers,
+ Staging database servers,
+ Production servers

### Requirements
+ WordPress
+ At least two different environments.

### How to Use
1. Use this `wp-config.php` file instead of the default WordPress `wp-config.php` file.  It contains the logic to determine which files settings to use.
1. If you need to develop locally, copy/create a `local-config.php` file and drop it in the WordPress install's root directory and configure database settings.
1. If you have a staging site, copy/create a `staging-config.php` file and drop it in the WordPress install and make sure there's no active `local-config.php` file.
1. If you're using git, or another version control system, include `wp-config.php` in your repository, but you'll probably want to ignore both 'local-config.php' and 'staging-config.php' if you're deploying from your repository.

----

### Why should I use this?
Really, if you're asking, you probably shouldn't.  If you're struggling with switching between local and staging environments, this may help.

> With great power, comes great responsibility.

### Version
0.2.0 - Updated filenames
0.1.2 - Code tidying, shuffling, update docs
0.1.1 - Renamed files to better mimic our setup
0.1.0 - Initial release


### Credits
+ Based on [Mark Jaquith's](https://github.com/markjaquith) blog post entitled ["WordPress local dev tips: DB & plugins"](http://markjaquith.wordpress.com/2011/06/24/wordpress-local-dev-tips/).  **Thanks Mark!**