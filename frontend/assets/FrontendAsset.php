<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class FrontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // Vendor CSS
        'resource/theme1/vendor/bootstrap/css/bootstrap.min.css',
        'resource/theme1/vendor/font-awesome/css/font-awesome.min.css',
        'resource/theme1/vendor/animate/animate.min.css',
        'resource/theme1/vendor/simple-line-icons/css/simple-line-icons.min.css',
        'resource/theme1/vendor/owl.carousel/assets/owl.carousel.min.css',
        'resource/theme1/vendor/owl.carousel/assets/owl.theme.default.min.css',
        'resource/theme1/vendor/magnific-popup/magnific-popup.min.css',
        
        // Theme CSS -->
        'resource/theme1/css/theme.css',
        'resource/theme1/css/theme-elements.css',
        'resource/theme1/css/theme-blog.css',
        'resource/theme1/css/theme-shop.css',

        // Current Page CSS -->
        'resource/theme1/vendor/rs-plugin/css/settings.css',
        'resource/theme1/vendor/rs-plugin/css/layers.css',
        'resource/theme1/vendor/rs-plugin/css/navigation.css',

        // Skin CSS -->
        'resource/theme1/css/skins/skin-corporate-3.css',

        // Theme Custom CSS -->
        'resource/theme1/css/custom.css',

    ];

    public $js = [
        // Head Libs -->
        'resource/theme1/vendor/modernizr/modernizr.min.js',
        
        // Vendor -->
        'resource/theme1/vendor/jquery/jquery.min.js',
        'resource/theme1/vendor/jquery.appear/jquery.appear.min.js',
        'resource/theme1/vendor/jquery.easing/jquery.easing.min.js',
        'resource/theme1/vendor/jquery-cookie/jquery-cookie.min.js',
        'resource/theme1/vendor/bootstrap/js/bootstrap.min.js',
        'resource/theme1/vendor/common/common.min.js',
        'resource/theme1/vendor/jquery.validation/jquery.validation.min.js',
        'resource/theme1/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js',
        'resource/theme1/vendor/jquery.gmap/jquery.gmap.min.js',
        'resource/theme1/vendor/jquery.lazyload/jquery.lazyload.min.js',
        'resource/theme1/vendor/isotope/jquery.isotope.min.js',
        'resource/theme1/vendor/owl.carousel/owl.carousel.min.js',
        'resource/theme1/vendor/magnific-popup/jquery.magnific-popup.min.js',
        'resource/theme1/vendor/vide/vide.min.js',

        // Theme Base, Components and Settings -->
        'resource/theme1/js/theme.js',

        // Current Page Vendor and Views -->
        'resource/theme1/vendor/rs-plugin/js/jquery.themepunch.tools.min.js',
        'resource/theme1/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js',

        // Current Page Vendor and Views -->
        'resource/theme1/js/views/view.contact.js',
        
        // Theme Custom -->
        'resource/theme1/js/custom.js',
        
        // Theme Initialization Files -->
        'resource/theme1/js/theme.init.js',
    ];
    
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}
