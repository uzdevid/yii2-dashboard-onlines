<?php

namespace uzdevid\dashboard\onlines\widgets\Onlines;

use yii\web\AssetBundle;

class OnlinesAsset extends AssetBundle {
    public $sourcePath = '@vendor/uzdevid/yii2-dashboard-onlines/widget/Onlines/assets';
    public $css = [];
    public $js = [
        'js/script.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}