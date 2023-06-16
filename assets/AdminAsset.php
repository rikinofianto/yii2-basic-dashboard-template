<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AdminAsset extends AssetBundle
{
  public $basePath = '@webroot';
  public $baseUrl = '@web/admin';
  public $css = [
    'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback',
    'vendor/fontawesome-free/css/all.min.css',
    'vendor/icheck-bootstrap/icheck-bootstrap.min.css',
    'css/adminlte.min.css',
  ];
  public $js = [
    'vendor/jquery/jquery.min.js',
    'vendor/bootstrap/js/bootstrap.bundle.min.js',
    'js/adminlte.min.js'
  ];
  public $depends = [
    'yii\bootstrap5\BootstrapPluginAsset',
    'yii\web\YiiAsset',
  ];
}