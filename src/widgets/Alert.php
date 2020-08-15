<?php
/**
 * @link http://www.prawee.com
 * 13/08/2020 11:14 PM
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 * @since v2 bootstrap4
 */
namespace prawee\themes\widgets;

use Yii;
use yii\bootstrap4\Widget;

class Alert extends Widget {

    public function run()
    {
        $session = Yii::$app->session;
        $flashes = $session->getAllFlashes();

        foreach ($flashes as $type => $flash) {

            foreach ((array) $flash as $i => $message) {
                return $this->view->registerJs("
                    Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                    }).fire({
                      icon: '".$type."',
                      title: '  ".Yii::t('app',$message)."',
                    })"
                );
            }

            $session->removeFlash($type);
        }
    }
}