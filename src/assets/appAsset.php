<?php
/**
 * Created by Dolphiq
 * Lucas Weijers
 * Date: 2017-10-16
 *
 *
 * This asset will publish all css and js needed voor the backend application
 */
namespace plugins\starfish01\iconpicker\assets;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class appAsset extends AssetBundle
{
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = '@vendor/starfish01/iconpicker/src/resources-app';

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        $this->css = [
            'css/field.css',
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/IconpickerModal.js',
            'js/field.js',
        ];

        parent::init();
    }
}
