<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
<!doctype html>
<html class="no-js" lang="">

    <head>	
    	<?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>		
<!--         <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="GOOGLEBOT" content="index follow"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />	 -->	
		<!-- =========================================
        fav & icons for iPhone and iPad
        ========================================== -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">		
		<!-- ========================================
		Google font
		========================================= -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
        <!-- =========================================
        CSS
        ========================================== -->
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/owl.transitions.css" />
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/owl.theme.css" />
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/owl.carousel.css" />
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/pe-icon-7-stroke.css" />
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/font-awesome.min.css" />
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/animate.css" />
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/bootstrap.min.css" />
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/style.css"/>
        <link rel="stylesheet" media="screen" href="<?=SITE_TEMPLATE_PATH;?>/css/responsive.css"/>
		<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH;?>/img/fav.jpg">
		<!-- =========================================
        Script
        ========================================== -->
        <script src="<?=SITE_TEMPLATE_PATH;?>/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
	<?$APPLICATION->ShowPanel()?>
		<header id="home" class="header-area">
			<div class="container header">
				<div class="row">				
					<div class="col-md-2 col-sm-2">
						<div id="info">
							<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => SITE_TEMPLATE_PATH."/inc/number.php"
									)
								);?>
						</div>
					</div>
					<div class="col-md-5 col-sm-4">															
						 <!--language-box -->
						<div class="language-box">
							<h4>Language:</h4>
							<div id="lang-switcher" class="ui-dropdown-list">
								<p class="ui-dropdown-list-trigger de"><strong>English</strong><i class="fa fa-angle-down"></i></p>
								<ul>
									<li><a href="#" title="" class="en">English</a></li>
									<li><a href="#" title="" class="en">Arabic</a></li>
								</ul>
							</div>
						</div><!-- /language-box -->
					</div>					
					<div class="col-md-5 col-sm-6">
						<!-- social-icons -->
						<div class="social-icons">
							<ul>
								<li><a><i class="fa fa-facebook"></i></a></li>
								<li><a><i class="fa fa-twitter"></i></a></li>
								<li><a><i class="fa fa-linkedin"></i></a></li>
								<li><a><i class="fa fa-behance"></i></a></li>
								<li><a><i class="fa fa-rss"></i></a></li>
								<li><a><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div><!-- /social-icons -->
					</div>
				</div>
			</div>
		</header>
		<!-- =========================================
		Menu Area
		========================================== -->
		<section id="mainmenu" class="mainmenu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="header-logo">
							<a href="/">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => SITE_TEMPLATE_PATH."/inc/logo.php"
									)
								);?>
							</a>
						</div>
					</div>						
					<div class="col-md-9">
						<div class="navbar-collaps">								
							
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"topMenu", 
									array(
										"ALLOW_MULTI_SELECT" => "N",
										"CHILD_MENU_TYPE" => "left",
										"DELAY" => "N",
										"MAX_LEVEL" => "1",
										"MENU_CACHE_GET_VARS" => array(
										),
										"MENU_CACHE_TIME" => "3600",
										"MENU_CACHE_TYPE" => "N",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"ROOT_MENU_TYPE" => "top",
										"USE_EXT" => "N",
										"COMPONENT_TEMPLATE" => "topMenu"
									),
									false
								);?>

							<!-- Menue-Search-bar -->
							<div id="sb-search" class="sb-search " >
								<?$APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
									"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
										"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
									),
									false
								);?>
															   <!--  <form>
							        <input class="sb-search-input " onkeyup="buttonUp();" placeholder=	"Enter your search term..." onblur="monkey();" type="search" value="" name="search" id="search">
							        <input class="sb-search-submit" type="submit"  value="">
							        <span class="sb-icon-search"><i class="fa fa-search"></i></span>
							    </form> -->
							</div>
							<!-- /Menue-search-bar -->
						</div>	
					</div>
				</div>
			</div>
		</section>
		<? if ($APPLICATION->GetCurPage(false) !== '/'): ?>

			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "breadcrumps", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>		

		<? endif; ?>

		<!-- =========================================
		Slider Area
		========================================== -->

	