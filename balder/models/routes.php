<?php

class Route{

	public function ctrRoute(){
		return "http://localhost/Repositorios/tecmm-zapopan/";
	}
	public function ctrRouteUrl(){
		return Route::ctrRoute()."balder/";
	}
	
	public function ctrRoutePicture(){
		return Route::ctrRoute()."assets/imgs/";
	}
	public function ctrRouteUserDirectory(){
		return Route::ctrRoute()."assets/imgs/directory/";
	}
	public function ctrRoutePictureSlider(){
		return Route::ctrRoute()."assets/imgs/sliders/";
	}
	public function ctrRouteEvent(){
		return Route::ctrRoute()."assets/imgs/events/";
	}

	public function ctrRouteBlog(){
		return Route::ctrRoute()."assets/imgs/blogs/";
	}

	public function ctrRouteTheme(){
		return Route::ctrRoute()."balder/themes/";
	}

	public function ctrRouteThemePicture(){
		return Route::ctrRoute()."balder/themes/MidgardLandingPage-university/imgs/";
	}

	public function ctrRouteThemeIcons(){
		return Route::ctrRoute()."balder/themes/MidgardLandingPage-university/imgs/icons/";
	}
	public function ctrRouteThemeJs(){
		return Route::ctrRoute()."balder/themes/MidgardLandingPage-university/js/";
	}
	public function ctrRouteThemeCss(){
		return Route::ctrRoute()."balder/themes/MidgardLandingPage-university/css/";
	}
	public function ctrRouteThemePlugins(){
		return Route::ctrRoute()."balder/themes/plugins/";
	}
	public function ctrRouteModal(){
		return Route::ctrRoute()."balder/views/modals/";
	}

	public function ctrRouteView(){
		return Route::ctrRoute()."balder/views/modules/";
	}
}