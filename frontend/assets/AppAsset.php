<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
    		
		   
    		'css/vendor-hub/style.css',
    		'css/vendor-hub/form.css',
    		'css/vendor-hub/pricing.css',
    		'css/vendor-hub/css.css',
    		'css/vendor-hub/flexslider.css',
    		
    		'css/bootstrap-datetimepicker.css',
    		
    		'css/font-awesome.min.css',
      	    'css/megamenu.css',
    	    'css/fancybox.css',
    	    'css/fileinput.css',
    		'css/style.css',
    		'css/main.css',
    		'css/resopnsive.css',
    		'css/bootstrap.min.css',
    		'css/product.css',
    		'css/magnific-popup.css',
    		
    		
	];
      public $js = [
      		'js/jquery_magnific-popup.js',
      		'js/imagezoom.js',
      		'js/jquery.flexslider.js',
      		'js/vendor-hub/js/chart.js',
	    	 'js/bootstrap.min.js',
	    	 'js/megamenu.js',
	    	 'js/menu_jquery.js',
	    	 'js/responsiveslides.min.js',
	    	 'js/jquery-ui.js',
			 'js/menu_jquery.js',
	     	 'js/fileinput.js',
	      	 'js/smooth-scroll/breakpoints.js',
	      	 'js/smooth-scroll/j.placeholder.js',
	         'js/smooth-scroll/scrollspy.js',
	         'js/smooth-scroll/SmoothScroll.js',
	         'js/smooth-scroll/user.js',
	         'js/ui.js',
      		
      		     		
      		'js/vendor-hub/js/main.js',
      		'js/vendor-hub/js/modernizr.js',
      		'js/vendor-hub/js/readmore.js',
      		
      		
      		

      
    ];
    
    public $depends = [
         'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',
    ];
}
