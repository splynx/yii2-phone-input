<?php

namespace borales\extensions\phoneInput;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Asset Bundle of the phone input widget. Registers required CSS and JS files.
 * @package borales\extensions\phoneInput
 */
class PhoneInputAsset extends AssetBundle
{
    /** @var string */
    public $sourcePath = '../vendor/bower-asset/intl-tel-input';
    /** @var array */
    public $css = ['build/css/intlTelInput.css'];
    /** @var array */
    public $js = [
        'build/js/utils.js',
        'build/js/intlTelInput-jquery.js',
    ];
    /** @var array */
    public $depends = [JqueryAsset::class];
}
