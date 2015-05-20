Yii 2 Theme
===========
Theme collections for Yii 2 Web Application

My first repository https://bitbucket.org/prawee/yii2-theme-admin-lte 

Reference resource 
- https://almsaeedstudio.com
- https://github.com/dmstr/yii2-adminlte-asset 


Installation
------------
```
php composer.phar require --prefer-dist prawee/yii2-adminlte-theme "dev-master"
```

or add

```
"prawee/yii2-adminlte-theme": "dev-master"
```

to the require-dev section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

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