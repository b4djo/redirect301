Redirect 301
============
Redirect 301

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist b4djo/yii2-redirect301 "*"
```

or add

```
"b4djo/yii2-redirect301": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
'modules' => [
    'redirect301' => [
        'class' => 'b4djo\redirect301\Module',
    ],
]```