<?php

namespace lewisjenkins\craftcodemirror\assetbundles\codemirrorfield;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class CodemirrorFieldAsset extends AssetBundle
{
    public function init()
    {
        $this->sourcePath = "@lewisjenkins/craftcodemirror/assetbundles/codemirrorfield/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/codemirror.js',
        ];

        $this->css = [
            'css/codemirror.css',
            'css/custom.css',
        ];

        parent::init();
    }
}
