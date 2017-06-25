Voonne Platform Web Project
===========================

Prepared Voonne platform web project for fast development

Requirements
------------

* PHP 5.6 or higher
* Nette 2.4 or higher

Installation
------------

* In first place download web project by [Composer](http://getcomposer.org/):

```sh
composer create-project voonne/web-project app --stability=dev
```

* And now check whether `/log`, `/storage` and `/temp` folders writable for your web server (Apache etc.).
* Create `app/config/config.local.neon` copying a file `app/config/config.local.template.neon` and adjusting parameters.
* In `services` section of config file `app/config/config.neon` adjust domain name and used languages.
* Create a database schema using Doctrine create command:

```sh
php www/index.php orm:schema-tool:create
```

* Install platform using Voonne install command:

```sh
php www/index.php voonne:install
```

* Now you can check if is everiting setup right on url `http://example.com/admin/` (change your domain name).

* You will need a user account to sign in. You create it using commands starting with `voonne:permission`, `voonne:role` and `voonne:user` in console. Remember that for a successful login, a user must have assigned at least one role that has at least one permission.

* Enjoy!
