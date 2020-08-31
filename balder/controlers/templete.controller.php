<?php

class TemplateController{
	
	/*=============================================
	LLAMAMOS LA PLANTILLA
	=============================================*/
	public function ctrGetTemplete(){
		include "balder/views/templete.php";
	}

	/*=============================================
	TRAEMOS LOS ESTILOS DINÁMICOS DE LA PLANTILLA
	=============================================*/
	public function ctrTemplateStyle(){
		$params["table"] = "templete";
		$personalParams["table"] = "personal";
		$response["templete"] = Templete::mdlTemplateStyle($params); 
		$response["personal"] = Personal::mdlGet($personalParams); 
		//$response["menu"] = TemplateController::ctrSeccionMenu();
		return $response;
	}

}