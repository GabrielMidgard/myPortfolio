<!DOCTYPE html>
<html class="no-js" lang="es-MX" data-bt-theme="MidgardCommerce 1.0.0">

<head>
	<?php
		session_start();
		setlocale(LC_ALL,"es_MX");
			
		$templete = TemplateController::ctrTemplateStyle();

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/
		$urlBase = Route::ctrRoute();
		$url = Route::ctrRouteUrl();
		$urlPicture = Route::ctrRoutePicture();
		
		$urlTheme = Route::ctrRouteTheme();
		$urlThemeIcons = Route::ctrRouteThemeIcons();
		$urlThemeJs = Route::ctrRouteThemeJs();
		$urlThemeCss = Route::ctrRouteThemeCss();
		$urlThemePlgins = Route::ctrRouteThemePlugins();

		$urlUserDir = Route::ctrRouteUserDirectory();
		$urlModalDir = Route::ctrRouteModal();

		$urlEventDir = Route::ctrRouteEvent();
		$urlBlogDir = Route::ctrRouteBlog();
		$urlView = Route::ctrRouteView();
		
		
		$midgardCommerceName = $templete["name"];
		
		include_once("modules/customeStyleColorConfig.php");
		echo($customeStyleColorConfig);
		$icon = '<link  rel="shortcut icon" type="image/x-icon" href="'.$urlPicture.$templete["icon"].'">';
	?>

	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo($urlThemeCss);?>style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo($urlThemeCss);?>/tec_mm.css">
	<link rel="stylesheet" type="text/css" href="<?php echo($urlThemeCss);?>/animated.css">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo($urlThemeCss);?>/responsive.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
    <title><?php echo($midgardCommerceName);?></title>
    <?php echo($icon);?>
	
	<!-- Meta -->
	<?php include_once("modules/meta-DATA.php");?>

	
<!--
	<script type="text/javascript">
		$(document).ready(function(){
			$('.page_preloader').delay(600).fadeOut('fast');
			//$('.page_preloader').delay(600).fadeIn('fast');
			//$("#cboxState").append('<option value="1">Aguascalientes</option>');
		});
    </script>

	-->
</head>

<body>
	<!-- Dialog direccion  -->
	<?php include_once("modals/address.php");?>
	
	<div class="main-page-wrapper">
		<?php include_once("friendlyUrl.php"); ?>
		<?php include_once("modules/header.php");?>

		
				
		<!-- Footer  -->
		<?php include_once("modules/footer.php");?>
		

		<!-- Scroll Top Button -->
		<button class="scroll-top tran3s p-color-bg">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</button>
		
		<!-- pre loader  -->
		<div id="loader-wrapper">
			<div id="loader"></div>
		</div>
	</div>
</body>

<!-- jQuery -->
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>jquery-2.1.4.js"></script>

<!-- Bootstrap JS -->
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>bootstrap/bootstrap.min.js"></script>

<!-- revolution -->
<script src="<?php echo($urlThemePlgins);?>revolution/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo($urlThemePlgins);?>revolution/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>revolution/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>revolution/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>revolution/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>revolution/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>revolution/revolution.extension.actions.min.js"></script>

<!-- Bootstrap Select JS -->
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>bootstrap-select/dist/js/bootstrap-select.js"></script>
<!-- Time picker -->
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>time-picker/jquery.timepicker.min.js"></script>
<!-- WOW js -->
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>WOW-master/dist/wow.min.js"></script>
<!-- owl.carousel -->
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>owl-carousel/owl.carousel.min.js"></script>
<!-- js count to -->
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>jquery.appear.js"></script>
<script type="text/javascript" src="<?php echo($urlThemePlgins);?>jquery.countTo.js"></script>

<!-- Theme js -->
<script type="text/javascript" src="<?php echo($urlThemeJs);?>theme.js"></script>
</html>