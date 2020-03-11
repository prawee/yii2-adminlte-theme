<?php
/**
 * Description of login.php
 * Created At 14/02/2020 5:39 PM
 * Author By Prawee Wongsa <konkeanweb@gmail.com>
 */

use yii\bootstrap4\Html;
use prawee\themes\AdminLte3Asset;
AdminLte3Asset::register($this);
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="login-page">
        <?php $this->beginBody() ?>
        <?=$content?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>