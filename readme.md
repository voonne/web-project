Voonne Platform Web Project
===========================

Prepared Voonne platform web project for fast development.

Requirements
------------

* PHP 5.6 or higher
* Nette 2.4 or higher

Installation
------------

* In first place download web project by [Composer](http://getcomposer.org/):

```sh
$ composer create-project voonne/web-project app
```

* And now check whether /log and /temp folders writable for your web server (Apache etc.).
* Create app/config/config.local.neon copying a file app/config/config.local.template.neon and adjusting parameters.
* Create a database schema using Doctrine create command:

```sh
$ php www/index.php orm:schema-tool:create
```

* Install platform using Voonne install command:

```sh
$ php www/index.php voonne:install <domain> <language ISO 639-1 code>
```

* Enjoy!
