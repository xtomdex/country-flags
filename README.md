CountryFlags API php wrapper
============================
Class for getting country flag image URL. Details on [Country Flag API](https://www.countryflags.io/) website.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xtomdex/country-flags "*"
```

or add

```
"xtomdex/country-flags": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php
 
 $imageUrl = \xtomdex\countryflags\CountryFlag::get('be');
 
 ?>

<img src="<?=$imageUrl?>" alt="Belgium flag image">

```

You can get images of different sizes (16, 24, 32, 48 and 64 pixels) by passing the size in the second param (by default image is 16px).

```php
 
 $imageUrl = \xtomdex\countryflags\CountryFlag::get('be', 64);
 
```

Also it is possible to change flag image style. Only two options are available and by default it is shiny. You can switch it to flat by passing flat style constant in the third argument.

```php
use \xtomdex\countryflags\CountryFlag;

 $imageUrl = CountryFlag::get('be', 32, CountryFlag::STYLE_FLAT);
 
```