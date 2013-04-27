# Development wp-config.php setup for WordPress

### Summary
A developer's setup for `wp-config.php` files that will accommodate:

+ Local development servers,
+ Remote database servers,
+ Production servers

This could also be easily adapted to use local, staging, production setups.

### Requirements
+ WordPress
+ you should have at least two different environments.

### How to Use
1. Use this `wp-config.php` file instead of the default WordPress `wp-config.php` file.
1. If you need to develop locally, copy/create a `local-config.php` file and drop it in the WordPress install's root directory.
1. If you need to develop locally and use a *remote database*, copy/create a `remote-config.php` file and drop it in the WordPress install and make sure there's no active `local-config.php` file.
1. If you're using git, or another version control system, include `wp-config.php` in your repository, but ignore both local-config.php and remote-config.php.

> With great power, comes great responsibility.

----

### Why should I use this?
Really, if you're asking, you probably shouldn't.  If you're struggling with switching between local and remote environments, this may help.

### Credits
+ Based on [Mark Jaquith's](https://github.com/markjaquith) ] blog post entitled ["WordPress local dev tips: DB & plugins"](http://markjaquith.wordpress.com/2011/06/24/wordpress-local-dev-tips/).  **Thanks Mark!**