<?php
/**
 * Description of AdminLte3Asset.php
 * Created At 14/02/2020 11:25 AM
 * Author By Prawee Wongsa <prawee.wongsa@allianz.com>
 */

namespace prawee\themes;

use yii\web\AssetBundle;

class AdminLte3Asset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/docs';
    public $css = [
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
        'assets/plugins/fontawesome-free/css/all.min.css',
        'assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
        'assets/css/docs.css',
        'assets/css/highlighter.css',
        'assets/css/adminlte.css',
    ];
    public $js = [
        //'assets/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js',
        'assets/js/adminlte.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapPluginAsset'
    ];
}