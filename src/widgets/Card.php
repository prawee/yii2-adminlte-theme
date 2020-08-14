<?php
/**
 * @link http://www.konkeanweb.com
 * 17/03/2020 11:14 AM
 * @copyright Copyright (c) 2020 served
 * @author Prawee Wongsa <konkeanweb@gmail.com>
 * @license BSD-3-Clause
 * @since v2 bootstrap4
 */

namespace prawee\themes\widgets;

use yii\bootstrap4\Widget;
use yii\bootstrap4\Html;
use yii\helpers\Url;

/**
 * Class Card
 * @package prawee\themes\widgets
 * echo Card::widget([
 *  'options' => ['class' => 'card card-success collapsed-card'],
 *  'icon' => 'fa-plus',
 *  'title' => 'Generic Mappings',
 *  'content' => 'Detail Information'
 * ]);
 */
class Card extends Widget
{
    public $container = [];
    public $tag = 'div';
    public $options = [];
    public $title = 'Title';
    public $icon = 'fas fa-plus';
    public $url = ['default/index'];
    public $content = null;

    public function init()
    {
        parent::init();
        if (empty($this->container)) {
            Html::addCssClass($this->container, ['col-md-3']);
        }
        if (empty($this->options['class'])) {
            Html::addCssClass($this->options, ['card card-success collapsed-card']);
        }
    }

    public function run()
    {
        $content = $this->getHeader();
        $content.= $this->getContent();
        $card = Html::tag($this->tag, $content, $this->options);
        echo Html::tag($this->tag, $card, $this->container);
    }

    public function getHeader()
    {
        $content = Html::tag('a', $this->title, [
            'class' => 'card-title',
            'href' => $this->url ? Url::to($this->url) : '#'
        ]);
        $content.= $this->getAction();
        return Html::tag($this->tag, $content, ['class' => 'card-header']);
    }

    public function getContent()
    {
        return Html::tag($this->tag, $this->content, ['class' => 'card-body']);
    }

    public function getAction()
    {
        $icon = Html::tag('i', null, ['class' => $this->icon]);
        $content = Html::button($icon, [
            'class' => 'btn btn-tool',
            'data-card-widget' => 'collapse'
        ]);
        return Html::tag($this->tag, $content, ['class' => 'card-tools']);
    }
}
