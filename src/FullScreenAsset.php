<?php

namespace Cacko\Yii2\Widgets\FullScreen;

use Cacko\Yii2\Widgets\FullScreen\components\Options;
use Yii;
use yii\helpers\Json;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class FullScreenAsset extends AssetBundle
{

    use RegisterWidgetTrait;

    public $sourcePath = __DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'fullscreen';

    public $js = [
        'js/widget.fullscreen.js',
    ];

    public $css = [
        'css/widget.fullscreen.scss',
        'css/widget-fullscreen-embedded.css',
    ];

    public $depends = [
        JqueryAsset::class,
    ];

    public static function register($view)
    {
        $options = Yii::createObject(Options::class);
        $view->registerJs(';$.fn.widgetFullScreen.defaults = ' . Json::encode($options) . ';');
        return parent::register($view);
    }
}
