<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Utensilios El Sarten');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
	echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');


	echo $this->fetch('meta');
	echo $this->fetch('css');
	echo $this->fetch('script');
	?>
	<!-- Latest compiled and minified CSS -->
	<title>Utensilios El Sarten</title>
	<meta name="description" content="El sarten web"/>
	<meta name="generator" content="PrestaShop"/>
	<meta name="robots" content="index,follow"/>
	<meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.0, initial-scale=1.0"/>
	<meta name="apple-mobile-web-app-capable" content="yes"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/global.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/autoload/highdpi.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/autoload/responsive-tables.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/autoload/uniform.default.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/fancybox/jquery.fancybox.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/product_list.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockcart/blockcart.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockcategories/blockcategories.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockcurrencies/blockcurrencies.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blocklanguages/blocklanguages.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockcontact/blockcontact.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blocknewsletter/blocknewsletter.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/autocomplete/jquery.autocomplete.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blocksearch/blocksearch.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blocktags/blocktags.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockuserinfo/blockuserinfo.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockviewed/blockviewed.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/homeslider/homeslider.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/themeconfigurator/css/hooks.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/modules/themeconfigurator/css/font1.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockwishlist/blockwishlist.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/productcomments/productcomments.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blockpermanentlinks/blockpermanentlinks.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/smartblog/css/smartblogstyle.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/smartbloghomelatestnews/css/smartbloglatestnews.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/smartblogtag/css/smartblogtags.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/tmhomecarousel/css/front.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/tmmanufacturerblock/css/tmmanufacturerblock.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/tmproductlistgallery/css/front.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/modules/tmproductvideos/css/tmproductvideos.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blocktopmenu/css/blocktopmenu.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/blocktopmenu/css/superfish-modified.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/css/modules/themeconfigurator/css/live_configurator.css" media="all" />
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>templateBasic/modules/themeconfiglink/views/css/themeconfiglink.css" media="all" />
	<link rel="icon" type="image/vnd.microsoft.icon" href="img/favicon.ico"/>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/global.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/highdpi.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/responsive-tables.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/uniform.default.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/jquery.fancybox.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/product_list.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockcart.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockcategories.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockcurrencies.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blocklanguages.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockcontact.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blocknewsletter.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/jquery.autocomplete.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blocksearch.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blocktags.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockuserinfo.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockviewed.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/homeslider.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/hooks.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/font1.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockwishlist.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/productcomments.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blockpermanentlinks.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/smartblogstyle.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/smartbloglatestnews.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/smartblogtags.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/front.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/tmmanufacturerblock.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/front.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/tmproductvideos.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/blocktopmenu.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/superfish-modified.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/live_configurator.css" media="all"/>
	<link rel="stylesheet" href="<?php echo $this->webroot; ?>css/themeconfiglink.css" media="all"/>
	<script type="text/javascript">
	var CUSTOMIZE_TEXTFIELD = 1;
	var FancyboxI18nClose = 'Cerrar';
	var FancyboxI18nNext = 'Siguiente';
	var FancyboxI18nPrev = 'Previo';
	var added_to_wishlist = 'Añadido a su lista de deseos.';
	var ajax_allowed = true;
	var ajaxsearch = true;
	var baseDir = '';
	var baseUri = 'index.php';
	var blocksearch_type = 'top';
	var caroucel_auto = 0;
	var caroucel_auto_control = 0;
	var caroucel_auto_hover = 1;
	var caroucel_auto_pause = 3000;
	var caroucel_control = 1;
	var caroucel_hide_controll = 1;
	var caroucel_item_scroll = 1;
	var caroucel_loop = 1;
	var caroucel_nb = 6;
	var caroucel_pager = 0;
	var caroucel_random = 0;
	var caroucel_slide_margin = 0;
	var caroucel_slide_width = 195;
	var caroucel_speed = 300;
	var carousel_auto = 0;
	var carousel_auto_control = 0;
	var carousel_auto_hover = 1;
	var carousel_auto_pause = 3000;
	var carousel_control = 1;
	var carousel_hide_control = 1;
	var carousel_item_margin = 30;
	var carousel_item_nb = 4;
	var carousel_item_scroll = 1;
	var carousel_item_width = 400;
	var carousel_loop = 1;
	var carousel_pager = 0;
	var carousel_random = 0;
	var carousel_speed = 500;
	var carousel_status = 1;
	var comparator_max_item = 2;
	var comparedProductsIds = [];
	var contentOnly = false;
	var customizationIdMessage = 'Personalización n°';
	var delete_txt = 'Eliminar';
	var displayList = false;
	var display_caroucel = 1;
	var freeProductTranslation = '¡Gratis!';
	var freeShippingTranslation = 'Envío gratuito!';
	var generated_date = 1472129308;
	var homeslider_loop = 1;
	var homeslider_pause = 3000;
	var homeslider_speed = 500;
	var homeslider_width = 10000;
	var id_lang = 4;
	var img_dir = 'img/';
	var instantsearch = true;
	var isGuest = 0;
	var isLogged = 0;
	var isMobile = false;
	var loggin_required = 'Debe identificarse para administrar su lista de deseos.';
	var max_item = 'No puede comparar más de 2 productos';
	var min_item = 'Debe elegir al menos un producto';
	var mywishlist_url = 'index.php?fc=module&module=blockwishlist&controller=mywishlist&id_lang=4';
	var nbItemsPerLine = 4;
	var nbItemsPerLineMobile = 2;
	var nbItemsPerLineTablet = 3;
	var page_name = 'index';
	var placeholder_blocknewsletter = 'Introduzca su dirección de correo electrónico';
	var priceDisplayMethod = 1;
	var priceDisplayPrecision = 2;
	var quickView = true;
	var removingLinkText = 'eliminar este producto de mi carrito';
	var roundMode = 2;
	var search_url = '';
	var static_token = '01ade8a68c5202cd5134eb506a06dd04';
	var tmnewsletter_status = '0';
	var tmolarkchat_status = '0';
	var token = '4eec3755f4ce99d84a89c58d5a920f33';
	var usingSecureMode = false;
	var wishlistProductsIds = false;
	</script>

<!--<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/tools.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/global.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/10-bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/14-device.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/15-jquery.total-storage.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/15-jquery.uniform-modified.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/16-jquery.scrollmagic.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/17-jquery.scrollmagic.debug.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/18-TimelineMax.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/19-TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/products-comparison.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/ajax-cart.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.serialScroll.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/treeManagement.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/blocknewsletter.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/blocksearch.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/homeslider.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/ajax-wishlist.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/front.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/front.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/superfish-modified.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/blocktopmenu.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/themeconfiglink.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/index.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/tmmanufacturerblock.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/controller.js"></script>-->
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/tools.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/global.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/10-bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/14-device.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/15-jquery.total-storage.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/15-jquery.uniform-modified.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/16-jquery.scrollmagic.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/17-jquery.scrollmagic.debug.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/18-TimelineMax.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/autoload/19-TweenMax.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/products-comparison.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/blockcart/ajax-cart.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/jquery.serialScroll.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/tools/treeManagement.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/blocknewsletter/blocknewsletter.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/js/jquery/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/blocksearch/blocksearch.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/homeslider/js/homeslider.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/blockwishlist/js/ajax-wishlist.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/modules/tmhomecarousel/js/front.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/modules/tmproductlistgallery/js/front.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/blocktopmenu/js/hoverIntent.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/blocktopmenu/js/superfish-modified.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/modules/blocktopmenu/js/blocktopmenu.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/modules/themeconfiglink/views/js/themeconfiglink.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/themes/theme1157/js/index.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot; ?>templateBasic/modules/tmmanufacturerblock/js/tmmanufacturerblock.js"></script>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo $this->webroot; ?>js/enigmaCart.js"></script>
</head>
<body ng-app="myApp" ng-controller="home">
	<div id="container">
		<div class="header-container">
			<header id="header">
				<div class="banner">
					<div class="container">
						<div class="row"></div>
					</div>
				</div>
				<div class="nav">
					<div class="container">
						<div class="row">
							<nav>
                     <!--
                     <div id="contact-link">
                        <a href="index.php?controller=contact" title="Contacte con nosotros">Contacte con nosotros</a>
                     </div>-->
                     <!--
                     <div id="languages-block-top" class="languages-block">
                        <div class="current">
                           <span>Español</span>
                        </div>
                        <ul id="first-languages" class="languages-block_ul toogle_content">
                           <li>
                              <a href="index.php?id_lang=1" title="English (English)">
                              <span>English</span>
                              </a>
                           </li>
                           <li>
                              <a href="index.php?id_lang=2" title="Deutsch (German)">
                              <span>Deutsch</span>
                              </a>
                           </li>
                           <li>
                              <a href="index.php?id_lang=3" title="Russian">
                              <span>Russian</span>
                              </a>
                           </li>
                           <li class="selected">
                              <span>Español</span>
                           </li>
                           <li>
                              <a href="index.php?id_lang=5" title="Français (French)">
                              <span>Français</span>
                              </a>
                           </li>
                        </ul>
                     </div>-->
                     <!--
                     <div id="currencies-block-top">
                        <form id="setCurrency" action="/prestashop_53429/" method="post">
                           <div class="current">
                              <input type="hidden" name="id_currency" id="id_currency" value="">
                              <input type="hidden" name="SubmitCurrency" value="">
                              <span class="cur-label">Divisa :</span>
                              <strong>USD</strong> 
                           </div>
                           <ul id="first-currencies" class="currencies_ul toogle_content">
                              <li class="selected">
                                 <a href="javascript:setCurrency(1);" rel="nofollow" title="Dollar">
                                 Dollar
                                 </a>
                              </li>
                              <li>
                                 <a href="javascript:setCurrency(2);" rel="nofollow" title="Euro">
                                 Euro
                                 </a>
                              </li>
                           </ul>
                        </form>
                     </div>--><!--
                     <div class="header_user_info">
                        <a class="login" href="index.php?controller=my-account" rel="nofollow" title="Entrar a tu cuenta de cliente">
                        Iniciar sesión
                        </a>
                     </div>
                     <div class="header_user_info">
                        <a href="index.php?controller=my-account" title="Ver mi cuenta de cliente" rel="nofollow">Your Account</a>
                     </div>-->
                  </nav>
               </div>
            </div>
         </div>
         <div>
         	<div class="container">
         		<div class="row">
         			<div id="header_logo">
         				<a href="<?php echo $this->webroot;?>" title="Utensilios El Sarten">
         					<img class="logo img-responsive" src="<?php echo $this->webroot;?>img/elsarten512x512.png" alt="Utensilios El Sarten" width="196" height="46">
         				</a>
         			</div>
         			<div class="cartBox clearfix">
         				<div class="shopping_cart">
         					<a href="" title="Ver mi carrito de compra" rel="nofollow">
         						<b>Carrito:</b>
         						<span class="ajax_cart_quantity unvisible">0</span>
         						<span class="ajax_cart_product_txt unvisible">producto</span>
         						<span class="ajax_cart_product_txt_s unvisible">Productos</span>
         						<span class="ajax_cart_total unvisible">
         						</span>
         						<span class="ajax_cart_no_product">vacío</span>
         					</a>
         					<div class="cart_block block">
         						<div class="block_content">
         							<div class="cart_block_list">
         								<dl class="products">
         									
         									
         								</dl>
         								<p class="cart-buttons">
         									<a id="button_order_cart" class="btn btn-default btn-sm icon-right" href="<?php echo $this->webroot; ?>cart" title="Check out" rel="nofollow">
         										<span>
         											Solicitar Presupuesto
         										</span>
         									</a>
         								</p>
         							</div>
         						</div>
         					</div>
         				</div>
         			</div>
         			<div id="layer_cart">
         				<div class="clearfix">
         					<div class="layer_cart_product col-xs-12 col-md-6">
         						<span class="cross" title="Cerrar Ventana"></span>
         						<h2>
         							<i class="fa fa-ok"></i>
         							Producto añadido correctamente a su carrito de la compra
         						</h2>
         						<div class="product-image-container layer_cart_img"></div>
         						<div class="layer_cart_product_info">
         							<span id="layer_cart_product_title" class="product-name"></span>
         							<span id="layer_cart_product_attributes"></span>
         							<div>
         								<strong class="dark">Cantidad</strong>
         								<span id="layer_cart_product_quantity"></span>
         							</div>
         							<div>
         								<strong class="dark">Total</strong>
         								<span id="layer_cart_product_price"></span>
         							</div>
         						</div>
         					</div>
         					<div class="layer_cart_cart col-xs-12 col-md-6">
         						<h2>
         							<span class="ajax_cart_product_txt_s  unvisible">
         								Hay <span class="ajax_cart_quantity"></span> artículos en su carrito.
         							</span>
         							<span class="ajax_cart_product_txt ">
         								Hay 1 artículo en su cesta.
         							</span>
         						</h2>
         						<div class="layer_cart_row">
         							<strong class="dark">
         								Total productos:
         							</strong>
         							<span class="ajax_block_products_total">
         							</span>
         						</div>
         						<div class="layer_cart_row">
         							<strong class="dark">
         								Total envío:&nbsp; </strong>
         								<span class="ajax_cart_shipping_cost">
         									Envío gratuito!
         								</span>
         							</div>
         							<div class="layer_cart_row">
         								<strong class="dark">
         									Total
         								</strong>
         								<span class="ajax_block_cart_total">
         								</span>
         							</div>
         							<div class="button-container">
         								<span class="continue btn btn-default btn-md icon-left" title="Continuar la compra">
         									<span>
         										Continuar la compra
         									</span>
         								</span>
         								<a class="btn btn-default btn-md icon-right" href="index.php?controller=order-opc" title="Ir a la caja" rel="nofollow">
         									<span>
         										Ir a la caja
         									</span>
         								</a>
         							</div>
         						</div>
         					</div>
         					<div class="crossseling"></div>
         				</div>
         				<div class="layer_cart_overlay"></div>
         				<div id="search_block_top" class="col-sm-5 clearfix">
         					<form action="search" method="get" id="searchbox">
         				<select name="filter" id="" style="display: inline-block; width: 80px; height: 38px; border: none;">
         						<option value="">Todos</option>
         						<?php if(isset($filtro)){ foreach ($filtro as $key => $value) { ?>         							
         							<option value="<?php echo $value['Lin']['co_lin']?>"><?php echo $value['Lin']['lin_des']?></option>
         						<?php }}?>
         					</select>
         					<?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'id'=>'search_query_top' ,'class' => '*search_query form-control ac_input', 'autocomplet' => 'off', 'value' => '', 'placeholder'=>'Buscar','style'=>"width: 70%;")); ?>   
         					<?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-default button-search')); ?>
         				</button>
         				</form>
         			</div>
         			<div id="block_top_menu" class="sf-contener clearfix col-lg-12">
         				<div class="stickUpTop" style="position: relative; top: 0px;">
         					<div class="stickUpHolder container">
         						<div>
         							<div class="cat-title">Categorías</div>
         							<ul class="sf-menu clearfix menu-content nonborderbox">
         								<li>
         									<span class="menu-mobile-grover"></span><a href="index.php?id_category=26&amp;controller=category&amp;id_lang=4" title="Cookware" class="">Cookware</a>
         									<ul class="submenu-container clearfix first-in-line-xs yesborderbox menu-mobile" style="">
         										<li>
         											<a href="index.php?id_category=32&amp;controller=category&amp;id_lang=4" title="Oven mitts" class="">Oven mitts</a>
         											<ul style="" class="yesborderbox">
         												<li><a href="index.php?id_category=43&amp;controller=category&amp;id_lang=4" title="Proin dapibus">Proin dapibus</a></li>
         												<li><a href="index.php?id_category=44&amp;controller=category&amp;id_lang=4" title="Nam vitae pretium">Nam vitae pretium</a></li>
         												<li><a href="index.php?id_category=45&amp;controller=category&amp;id_lang=4" title="Donec a tempus">Donec a tempus</a></li>
         												<li><a href="index.php?id_category=46&amp;controller=category&amp;id_lang=4" title="Pellentesque sapien">Pellentesque sapien</a></li>
         												<li><a href="index.php?id_category=47&amp;controller=category&amp;id_lang=4" title="Nam gravida">Nam gravida</a></li>
         												<li><a href="index.php?id_category=48&amp;controller=category&amp;id_lang=4" title="Sed placerat">Sed placerat</a></li>
         											</ul>
         										</li>
         										<li>
         											<a href="index.php?id_category=33&amp;controller=category&amp;id_lang=4" title="Pot holders" class="">Pot holders</a>
         											<ul style="" class="yesborderbox">
         												<li><a href="index.php?id_category=49&amp;controller=category&amp;id_lang=4" title="Aliquam luctus">Aliquam luctus</a></li>
         												<li><a href="index.php?id_category=50&amp;controller=category&amp;id_lang=4" title="Praesent mattis">Praesent mattis</a></li>
         												<li><a href="index.php?id_category=52&amp;controller=category&amp;id_lang=4" title="Vivamus et leo">Vivamus et leo</a></li>
         												<li><a href="index.php?id_category=51&amp;controller=category&amp;id_lang=4" title="Nunc consequat">Nunc consequat</a></li>
         												<li><a href="index.php?id_category=53&amp;controller=category&amp;id_lang=4" title="Quisque eget">Quisque eget</a></li>
         												<li><a href="index.php?id_category=54&amp;controller=category&amp;id_lang=4" title="Pellentesque quis">Pellentesque quis</a></li>
         											</ul>
         										</li>
         										<li>
         											<a href="index.php?id_category=34&amp;controller=category&amp;id_lang=4" title="Gloves" class="">Gloves</a>
         											<ul style="" class="yesborderbox">
         												<li><a href="index.php?id_category=55&amp;controller=category&amp;id_lang=4" title="Aliquam bibendum">Aliquam bibendum</a></li>
         												<li><a href="index.php?id_category=56&amp;controller=category&amp;id_lang=4" title="Phasellus nec">Phasellus nec</a></li>
         												<li><a href="index.php?id_category=57&amp;controller=category&amp;id_lang=4" title="Mauris facilisis">Mauris facilisis</a></li>
         												<li><a href="index.php?id_category=58&amp;controller=category&amp;id_lang=4" title="Quisque eget">Quisque eget</a></li>
         												<li><a href="index.php?id_category=59&amp;controller=category&amp;id_lang=4" title="Praesent ex du">Praesent ex du</a></li>
         												<li><a href="index.php?id_category=60&amp;controller=category&amp;id_lang=4" title="Donec gravida">Donec gravida</a></li>
         											</ul>
         										</li>
         										<li>
         											<a href="index.php?id_category=35&amp;controller=category&amp;id_lang=4" title="Hairnets" class="">Hairnets</a>
         											<ul style="" class="yesborderbox">
         												<li><a href="index.php?id_category=61&amp;controller=category&amp;id_lang=4" title="Nulla laoreet">Nulla laoreet</a></li>
         												<li><a href="index.php?id_category=62&amp;controller=category&amp;id_lang=4" title="Duis iaculis tellus">Duis iaculis tellus</a></li>
         												<li><a href="index.php?id_category=63&amp;controller=category&amp;id_lang=4" title="Fusce molestie">Fusce molestie</a></li>
         												<li><a href="index.php?id_category=64&amp;controller=category&amp;id_lang=4" title="Suspendisse aliquam">Suspendisse aliquam</a></li>
         												<li><a href="index.php?id_category=65&amp;controller=category&amp;id_lang=4" title="Praesent mattis">Praesent mattis</a></li>
         												<li><a href="index.php?id_category=66&amp;controller=category&amp;id_lang=4" title="Mauris facilisis">Mauris facilisis</a></li>
         											</ul>
         										</li>
         										<li>
         											<a href="index.php?id_category=36&amp;controller=category&amp;id_lang=4" title="Timers" class="">Timers</a>
         											<ul style="" class="yesborderbox">
         												<li><a href="index.php?id_category=67&amp;controller=category&amp;id_lang=4" title="Nullam elementum">Nullam elementum</a></li>
         												<li><a href="index.php?id_category=68&amp;controller=category&amp;id_lang=4" title="Fusce non erat">Fusce non erat</a></li>
         												<li><a href="index.php?id_category=69&amp;controller=category&amp;id_lang=4" title="Etiam malesuada">Etiam malesuada</a></li>
         												<li><a href="index.php?id_category=70&amp;controller=category&amp;id_lang=4" title="Integer a sem">Integer a sem</a></li>
         												<li><a href="index.php?id_category=71&amp;controller=category&amp;id_lang=4" title="Aliquam bibendum">Aliquam bibendum</a></li>
         												<li><a href="index.php?id_category=72&amp;controller=category&amp;id_lang=4" title="Lorem ipsum">Lorem ipsum</a></li>
         											</ul>
         										</li>
         										<li class="category-thumbnail">
         											<div><img src="img/26-0_thumb.jpg" alt="Cookware" title="Cookware" class="imgm"></div>
         											<div><img src="img/26-1_thumb.jpg" alt="Cookware" title="Cookware" class="imgm"></div>
         										</li>
         									</ul>
         								</li>
         								<li><a href="index.php?id_category=29&amp;controller=category&amp;id_lang=4" title="Chef Wear">Chef Wear</a></li>
         								<li><a href="index.php?id_category=31&amp;controller=category&amp;id_lang=4" title="Safety">Safety</a></li>
         								<li><a href="index.php?id_category=39&amp;controller=category&amp;id_lang=4" title="Pizza tools">Pizza tools</a></li>
         								<li><a href="index.php?id_category=41&amp;controller=category&amp;id_lang=4" title="Baking">Baking</a></li>
         								<li><a href="index.php?id_category=38&amp;controller=category&amp;id_lang=4" title="Bar accessories">Bar accessories</a></li>
         								<div id="animate-box" style="left: 574.859px; width: 127px; opacity: 0;"></div>
         							</ul>
         						</div>
         					</div>
         				</div>
         				<div class="pseudoStickyBlock" style="position: relative; display: block; height: 0px;"></div>
         			</div>
         			
         		</div>
         	</div>
         </div>
      </header>
      
   </div>
   <div id="content">

   	<?php echo $this->Session->flash(); ?>

   	<?php echo $this->fetch('content'); ?>
   </div>
   <div class="footer-container">
   	<footer id="footer" class="container accordion">
   		<div class="row">
   			<div id="htmlcontent_footer">
   				<div class="">
   					<ul class="htmlcontent-home clearfix row">
   						<li class="htmlcontent-item-1">
   							<div class="bannerBox">
   								<img src="<?php echo $this->webroot;?>img/elsarten512x512.png" class="item-img" title="" alt="" width="100%" height="100%">
   								<div class="item-html">
   									<div>
   										<div></div>
   									</div>
   								</div>
   							</div>
   						</li>
   					</ul>
   				</div>
   			</div>
   			<section id="social_block" class="footer-block col-xs-12 col-sm-2">
   				<h4>Síganos</h4>
   				<ul class="toggle-footer" style="display: none;">
   					<li class="facebook">
   						<a target="_blank" href="http://www.facebook.com/prestashop" title="Facebook">
   							<span>Facebook</span>
   						</a>
   					</li>
   					<li class="twitter">
   						<a target="_blank" href="http://www.twitter.com/prestashop" title="Twitter">
   							<span>Twitter</span>
   						</a>
   					</li>
   					<li class="rss">
   						<a target="_blank" href="http://www.prestashop.com/blog/en/" title="RSS">
   							<span>RSS</span>
   						</a>
   					</li>
   					<li class="youtube">
   						<a target="_blank" href="https://www.youtube.com/" title="Youtube">
   							<span>Youtube</span>
   						</a>
   					</li>
   					<li class="google-plus">
   						<a target="_blank" href="https://www.google.com/+prestashop" title="Google Plus">
   							<span>Google Plus</span>
   						</a>
   					</li>
   					<li class="pinterest">
   						<a target="_blank" href="https://pinterest.com/" title="Pinterest">
   							<span>Pinterest</span>
   						</a>
   					</li>
   				</ul>
   			</section>
   			<!-- MODULE Block footer -->
   			<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
   				<h4>Información</h4>
   				<ul class="toggle-footer" style="display: none;">
   					<li class="item">
   						<a href="index.php?controller=prices-drop" title="Promociones especiales">
   							Promociones especiales
   						</a>
   					</li>
   					<li class="item">
   						<a href="index.php?controller=new-products" title="Novedades">
   							Novedades
   						</a>
   					</li>
   					<li class="item">
   						<a href="index.php?controller=best-sales" title="¡Lo más vendido!">
   							¡Lo más vendido!
   						</a>
   					</li>
   					<li class="item">
   						<a href="index.php?controller=stores" title="Nuestras tiendas">
   							Nuestras tiendas
   						</a>
   					</li>
   					<li class="item">
   						<a href="index.php?controller=contact" title="Contacte con nosotros">
   							Contacte con nosotros
   						</a>
   					</li>
   					<li class="item">
   						<a href="index.php?id_cms=4&amp;controller=cms&amp;id_lang=4" title="About us">
   							About us
   						</a>
   					</li>
   					<li class="item">
   						<a href="index.php?id_cms=6&amp;controller=cms&amp;id_lang=4" title="Páginas de configuración">
   							Páginas de configuración
   						</a>
   					</li>
   					<li>
   						<a href="index.php?controller=sitemap" title="Mapa del sitio">
   							Mapa del sitio
   						</a>
   					</li>
   				</ul>
   			</section>
   			<div class="bottom-footer col-xs-12">
   				<div>
   					© <span class="current-year">2016</span> <a class="_blank" title="prestashop" href="http://www.prestashop.com" target="_blank">Todos lo derecho reservados</a>
   				</div>
   			</div>
   			<!-- /MODULE Block footer -->
   			<!-- Block myaccount module -->
   			<section class="footer-block col-xs-12 col-sm-2">
   				<h4>
   					<a href="index.php?controller=my-account" title="Administrar mi cuenta de cliente" rel="nofollow">Mi cuenta</a>
   				</h4>
   				<div class="block_content toggle-footer" style="display: none;">
   					<ul class="bullet">
   						<li>
   							<a href="index.php?controller=history" title="Mis compras" rel="nofollow">Mis compras</a>
   						</li>
   						<li>
   							<a href="index.php?controller=order-follow" title="Mis devoluciones" rel="nofollow">Mis devoluciones</a>
   						</li>
   						<li>
   							<a href="index.php?controller=order-slip" title="Mis vales descuento" rel="nofollow">Mis vales descuento</a>
   						</li>
   						<li>
   							<a href="index.php?controller=addresses" title="Mis direcciones" rel="nofollow">Mis direcciones</a>
   						</li>
   						<li>
   							<a href="index.php?controller=identity" title="Administrar mi información personal" rel="nofollow">Mis datos personales</a>
   						</li>
   					</ul>
   				</div>
   			</section>
   			<!-- /Block myaccount module -->
   			<!-- Block Newsletter module-->
   			<div id="newsletter_block_left" class="block">
   				<h4>Boletín</h4>
   				<div class="block_content">
   					<form action="//livedemo00.template-help.com/prestashop_53429/index.php" method="post">
   						<div class="form-group">
   							<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="Introduzca su dirección de correo electrónico">
   							<button type="submit" name="submitNewsletter" class="btn btn-default btn-sm">
   								<span>OK</span>
   							</button>
   							<input type="hidden" name="action" value="0">
   						</div>
   					</form>
   				</div>
   			</div>
   			<!-- /Block Newsletter module-->
   			<!-- MODULE Block contact infos -->
   			<section id="block_contact_infos" class="footer-block col-xs-12 col-sm-3">
   				<div>
   					<h4>Información sobre la tienda</h4>
   					<ul class="toggle-footer" style="display: none;">
   						<li>
   							
   						</li>
   						<li>
   							Llámanos ahora: 
   							<span>0123-456-789</span>
   						</li>
   						<li>
   							Email: 
   							<span><a href="">info@prueba.com</a></span>
   						</li>
   					</ul>
   				</div>
   			</section>
   			<!-- /MODULE Block contact infos -->
   		</div>
   	</footer>
   </div>
</div>
<?php echo $this->element('sql_dump'); ?>
</body>
<script>
addToCard();
</script>
</html>
