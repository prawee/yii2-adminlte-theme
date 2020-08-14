<?php
/**
 * @link http://www.konkeanweb.com
 * 2/4/2017 AD 5:43 AM
 * @copyright Copyright (c) 2017 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 */
namespace prawee\themes\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class MenuBlock extends Widget{
    public $options = [];
    public $containerOptions = [];
    public $items = [];
    public $itemOptions = ['class'=>'dropdown'];
    public $usePermissions = false;

    public function init()
    {
        parent::init();
        if (empty($this->options['class'])) {
            Html::addCssClass($this->options,'navbar-custom-menu');
        }
        $options = $this->options;
        $tag = ArrayHelper::remove($options,'tag','div');
        echo Html::beginTag($tag,$this->options);

        if (empty($this->containerOptions['class'])) {
            Html::addCssClass($this->containerOptions,'nav navbar-nav');
        }
        $containerOptions = $this->containerOptions;
        $containerTag = ArrayHelper::remove($containerOptions,'tag','ul');
        echo Html::beginTag($containerTag,$this->containerOptions);
    }
    public function run()
    {
        $this->renderItems();
        $containerTag = ArrayHelper::remove($this->containerOptions,'tag','ul');
        echo Html::endTag($containerTag);
        $tag = ArrayHelper::remove($this->options,'tag','div');
        echo Html::endTag($tag);
    }
    public function renderItems()
    {
        foreach($this->items as $item) {
            if (empty($item['visible'])) {
                continue;
            }
            if (!empty($item['options']['class'])) {
                Html::addCssClass($item['options'],$this->itemOptions);
            }
            if (empty($item['labelOptions'])) {
                $item['labelOptions'] = [
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown'
                ];
            }
            echo Html::beginTag('li',$item['options']);
            if (!empty($item['label'])) {
                echo Html::a($item['label'],$item['url'],$item['labelOptions']);
            }
            if (!empty($item['block'])) {
                $this->renderItem($item['block']);
            }
            echo Html::endTag('li');
        }
        echo $this->itemConfig();
    }
    public function renderItem($item)
    {
        echo DropDownMenu::widget([
            'items' => $item
        ]);
    }
    public function itemConfig()
    {
        if (Yii::$app->user->can('system.configuration') || !$this->usePermissions) {
            return Html::tag('li',Html::a(Html::tag('i',null,['class'=>'fa fa-gears']),'#',['data-toggle'=>'control-sidebar']));
        }
        return null;
    }
}
