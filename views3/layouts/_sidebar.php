<?php
/**
 * Description of _navbar.php
 * Created At 14/02/2020 12:49 PM
 * Author By Prawee Wongsa <konkeanweb@gmail.com>
 */
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="/" class="brand-link logo-switch">
        <!--
        <img src="<?=$directoryAsset?>/assets/img/logo-xs.png" alt="AdminLTE Docs Logo Small" class="brand-image-xl logo-xs">
        <img src="<?=$directoryAsset?>/assets/img/logo-xl.png" alt="AdminLTE Docs Logo Large" class="brand-image-xs logo-xl" style="left: 12px">
        -->
        <div class="brand-image-xl logo-xs" style="padding:5px;font-size:30px;font-weight: bold;">
            <?=Yii::$app->params['shortName']?>
        </div>
        <div class="brand-image-xs logo-xl" style="padding:5px;font-size:30px;font-weight: bold;">
            <?=Yii::$app->name?>
        </div>
    </a>
    <div class="sidebar">
        <nav class="mt-2">
            <?php
            $menuItems = [
                ['label' => '<i class="nav-icon fas fa-home"></i> '.Html::tag('p', 'Home'), 'url' => ['/site/index']],
            ];
            echo Nav::widget([
                'options' => [
                    'class' => 'nav nav-pills nav-sidebar nav-child-indent flex-column',
                    'data-widget' => 'treeview',
                    'role' => 'menu'
                ],
                'items' => $menuItems,
                'encodeLabels' => false,
            ]);
            ?>
        </nav>
    </div>
</aside>