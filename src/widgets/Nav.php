<?php
/**
 * @link http://www.konkeanweb.com
 * 2/3/2017 AD 9:09 PM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\themes\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Nav extends Widget{
    public $options = [];
    public $toggleText = 'Toggle navigation';

    public function init()
    {
        parent::init();
        if (empty($this->options['class'])) {
            Html::addCssClass($this->options,['navbar','navbar-static-top']);
        }
        if (empty($this->options['role'])) {
            $this->options['role'] = 'navigation';
        }
        $options = $this->options;
        $tag = ArrayHelper::remove($options,'tag','nav');
        echo Html::beginTag($tag,$options);

        $toggle = Html::tag('span',$this->toggleText, ['class' => 'sr-only']);
        echo Html::a($toggle,'#',[
            'class' => 'sidebar-toggle',
            'data-toggle' => 'offcanvas',
            'role' => 'button'
        ]);
    }
    public function run()
    {
        $tag = ArrayHelper::remove($this->options,'tag','nav');
        echo Html::endTag($tag);
    }
}