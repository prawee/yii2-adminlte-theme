<?php
/**
 * @link http://www.konkeanweb.com
 * 2/3/2017 AD 7:58 PM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\themes\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class Header extends Widget{
    public $options = [];
    public function init()
    {
        parent::init();
        if (empty($this->options['class'])) {
            Html::addCssClass($this->options,['main-header']);
        }
        $options = $this->options;
        $tag = ArrayHelper::remove($options,'tag','header');
        echo Html::beginTag($tag,$options);

        $largeLogo = Html::tag('span',Yii::$app->params['appName'],['class'=>'logo-lg']);
        $miniLogo = Html::tag('span',Yii::$app->params['appName'],['class'=>'logo-mini']);
        echo Html::a($miniLogo.$largeLogo, Yii::$app->homeUrl, ['class' => 'logo']);
    }
    public function run()
    {
        $tag = ArrayHelper::remove($this->options,'tag','header');
        echo Html::endTag($tag);
    }
}