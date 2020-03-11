<?php
/**
 * Description of dashboard.php
 * Created At 14/02/2020 4:40 PM
 * Author By Prawee Wongsa <konkeanweb@gmail.com>
 */

use yii\bootstrap4\Html;
use prawee\themes\AdminLte3Asset;

AdminLte3Asset::register($this);
$directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/docs');
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body data-scrollbar-auto-hide="n" class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <?php $this->beginBody() ?>
    <div class="wrapper">
        <?=$this->render('_navbar')?>
        <?=$this->render('_sidebar', ['directoryAsset' => $directoryAsset])?>
        <?=$this->render('_content', ['content' => $content])?>
        <?=$this->render('_footer')?>
    </div>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>