Reserved Usernames
==================

This is a PHP packaged version of [shouldbee/reserved-usernames](https://github.com/shouldbee/reserved-usernames) available as a Composer package from packagist.org.

I update this library based on updates published to the source data.


Installation
------------

```
composer require p3k/reserved-usernames
```

Usage
-----

```php
$username = 'login';
if(p3k\is_reserved_username($username)) {
  // Throw an error
}
```
