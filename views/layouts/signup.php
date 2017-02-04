<?php
/**
 * @link http://www.konkeanweb.com
 * 2/5/2016 AD 4:27 AM
 * @copyright Copyright (c) 2016 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
use yii\helpers\Html;
use prawee\themes\AdminLteAsset;
AdminLteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
    <head>
        <meta charset="<?=Yii::$app->charset?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?=Html::csrfMetaTags()?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head() ?>
    </head>
    <body class="login-page">
        <?php $this->beginBody() ?>
        <?=$content?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
