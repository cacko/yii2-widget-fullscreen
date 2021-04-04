# yii2-widget-fullscreen

An a shite straightfoward way to wrap your junk html containeirs in yii2 with a fullscreen functionality

## Demo
* demo - https://cacko-yii2.herokuapp.com/fullscreen/widget
* src - https://github.com/cacko/yii2-widgets/tree/master/modules/fullscreen

## Install
```shell
composer install cacko/yii2-widget-fullscreen
```

## Usage

```php
use Cacko\Yii2\Widgets\FullScreen\widgets\FullScreenWidget;

echo FullScreenWidget::widget(['content' => Html::img('/start.webp')]);

```

there's bunch of defaults in `Cacko\Yii2\Widgets\FullScreen\components\Options`, as usual if you think they are shit, feel free to inject your own bollocks, just keep in mind you will have to bother with the css styles too - good luck
