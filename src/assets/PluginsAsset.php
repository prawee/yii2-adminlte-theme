<?php
/**
 * @link http://www.konkeanweb.com
 * 2020-08-14 17:54
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <prawee@hotmail.com>
 * @license MIT
 */
namespace prawee\themes\assets;

use yii\web\AssetBundle;

class PluginsAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $css = [
        'sweetalert2-theme-bootstrap-4/bootstrap-4.min.css',
    ];
    public $js = [
        'sweetalert2/sweetalert2.min.js'
    ];
    public $depends = [
        'prawee\themes\assets\AdminLteAsset'
    ];
}