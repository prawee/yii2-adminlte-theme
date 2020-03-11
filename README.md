Yii 2 Theme
===========
Theme collections for Yii 2 Web Application

My first repository https://bitbucket.org/prawee/yii2-theme-admin-lte 

Reference resource 
- https://almsaeedstudio.com
- https://github.com/dmstr/yii2-adminlte-asset 


Installation
------------

V3

```
php composer.phar require --prefer-dist prawee/yii2-adminlte-theme "dev-master"
```

or add

```
"prawee/yii2-adminlte-theme": "dev-master"
```

V2 

```
php composer.phar require --prefer-dist prawee/yii2-adminlte-theme "1.0"
```

or add

```
"prawee/yii2-adminlte-theme": "1.0"
```

to the require-dev section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

V3

```php
'components'=>[
    ...
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/prawee/yii2-adminlte-theme/views3'
            ],
        ],
    ],
    ...
``` 

V2

```php
'components'=>[
    ...
    'view' => [
        'theme' => [
            'pathMap' => [
                '@app/views' => '@vendor/prawee/yii2-adminlte-theme/views'
            ],
        ],
    ],
    ...
```  