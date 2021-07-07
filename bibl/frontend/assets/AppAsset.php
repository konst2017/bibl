<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
      
    
   "css/bootstrap.min.css",
    "css/bootstrap-utilities.css",
    "css/style.css"

   
   
    
    
    ];
    public $js = [
	
	'js/bootstrap.bundle.min.js',
        'js3/price-range.js',
        'js3/jquery.prettyPhoto.js',
        'js3/jquery.cookie.js',
        'js3/jquery.accordion.js',
        'js3/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
