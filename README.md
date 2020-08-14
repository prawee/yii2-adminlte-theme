# Backend template for Yii 2 Application + AdminLTE v3 + Bootstrap 4

## Reference resource

- <https://almsaeedstudio.com>
- <https://github.com/dmstr/yii2-adminlte-asset>
- <https://bitbucket.org/prawee/yii2-theme-admin-lte>

## Installation

### Release version

```terminal
php composer.phar require --prefer-dist prawee/yii2-adminlte-theme "dev-master"
```

or add

```terminal
"prawee/yii2-adminlte-theme": "dev-master"
```

### V2 or older

```terminal
php composer.phar require --prefer-dist prawee/yii2-adminlte-theme "1.0"
```

or add

```terminal
"prawee/yii2-adminlte-theme": "1.0"
```

to the require-dev section of your `composer.json` file.

## Usage

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
],
'params' => [
    'shortName' => 'PW'
]
```
