<?php
/**
 * Description of _navbar.php
 * Created At 14/02/2020 12:49 PM
 * Author By Prawee Wongsa <konkeanweb@gmail.com>
 */

use yii\bootstrap4\Html;
?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
    </ul>

    <form class="form-check-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
        <?=Html::beginForm('/admin/site/logout', 'post')?>
        <?=Html::submitButton(
            '<i class="fas fa-sign-out-alt"></i> Logout ('.Yii::$app->user->identity->username.') ',
            ['class' => 'btn btn-link nav-link']
        )?>
        <?=Html::endForm()?>
        </li>
    </ul>
</nav>
