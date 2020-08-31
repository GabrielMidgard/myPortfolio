<?php

class ControllerPersonal{
	

	/*=============================================
	GET ALL 
	=============================================*/
	static public function ctrShowAll($params){
		$params["table"] = "personal";
		$response = ModelAssignation::mdlShow($params);
		return $response;
	}

	static public function ctrShow($params){
		$params["table"] = "personal";
		$response = ModelAssignation::mdlShow($params);
		return $response;
	}

	static public function ctrGetAll(){
		$response="";
		$divRolChecks="";
		$params["table"] = "personal";
		$results = ModelMark::mdlGetAll($params);

		foreach($results as $key => $value){
			$divRolChecks.='
			<div class="form-check">
				<label class="form-check-label">
					<input class="form-check-input" type="radio" name="rol" value="'.$value["id"].'" >
					'.$value["name"].'
					<span class="circle">
						<span class="check"></span>
					</span>
				</label>
			</div>
			';
		}
		//checked

        $response='
        <ul>
            <li>
                <div class="submenu">
                    <div class="row">
                        '.$divRolChecks.'
                    </div>
                </div>
            </li>
        </ul>';
        return $divRolChecks;
	}


	
	static public function ctrGetById($params){
		$params["table"] = "personal";
		$response = ModelAssignation::mdlGetById($params);
		return $response;
	}
	/*=============================================
	CREAR 
	=============================================*/
	static public function ctrCreate($dates){
		//Validar imagen
        $urlMarks = "../../assets/imgs/assignation/";
        if(isset($dates["img"]["tmp_name"]) && !empty($dates["img"]["tmp_name"])){
            //Definimos las medidas
            list($ancho, $alto) = getimagesize($dates["img"]["tmp_name"]);	
            $newWidth = 240;
            $newHeight = 241;


            //De acuerdo al tipo de imagen alicamos las funciones por defecto de php
            if($dates["img"]["type"] == "image/jpeg"){
                //Guardamos la imagen en el directorio
                $routeImg = $urlMarks."/".$dates["route"].".jpg";
                $origin = imagecreatefromjpeg($dates["img"]["tmp_name"]);						
                $destiny = imagecreatetruecolor($newWidth, $newHeight);
				imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $ancho, $alto);
                imagejpeg($destiny, $routeImg);

                $dates["img"] = $dates["route"].".jpg";
                
            } else if($dates["img"]["type"] == "image/png"){
                //Guardamos la imagen en el directorio
				$routeImg = $urlMarks."/".$dates["route"].".png";
                $origin = imagecreatefrompng($dates["img"]["tmp_name"]);						
                $destiny = imagecreatetruecolor($newWidth, $newHeight);
				imagealphablending($destiny, FALSE);
				imagesavealpha($destiny, TRUE);
				imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $ancho, $alto);
                imagepng($destiny, $routeImg);
                
                $dates["img"] = $dates["route"].".png";
			}
        }

		$params["table"] = "assignation";
		$params["dates"] = $dates;

        $response = ModelAssignation::mdlCreate($params);
        return $response;
	}
 
	/*=============================================
	EDITAR 
	=============================================*/
	static public function ctrUpdate($dates){

		$urlMarks = "../../assets/imgs/marks/";
        if(isset($dates["img"]["tmp_name"]) && !empty($dates["img"]["tmp_name"])){
            //Definimos las medidas
            list($ancho, $alto) = getimagesize($dates["img"]["tmp_name"]);	
            $newWidth = 240;
            $newHeight = 241;


            //De acuerdo al tipo de imagen alicamos las funciones por defecto de php
            if($dates["img"]["type"] == "image/jpeg"){
                //Guardamos la imagen en el directorio
                $routeImg = $urlMarks."/".$dates["route"].".jpg";
                $origin = imagecreatefromjpeg($dates["img"]["tmp_name"]);						
                $destiny = imagecreatetruecolor($newWidth, $newHeight);
				imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $ancho, $alto);
                imagejpeg($destiny, $routeImg);

                $dates["img"] = $dates["route"].".jpg";
                
            } else if($dates["img"]["type"] == "image/png"){
                //Guardamos la imagen en el directorio
				$routeImg = $urlMarks."/".$dates["route"].".png";
                $origin = imagecreatefrompng($dates["img"]["tmp_name"]);						
                $destiny = imagecreatetruecolor($newWidth, $newHeight);
				imagealphablending($destiny, FALSE);
				imagesavealpha($destiny, TRUE);
				imagecopyresized($destiny, $origin, 0, 0, 0, 0, $newWidth, $newHeight, $ancho, $alto);
                imagepng($destiny, $routeImg);
                
                $dates["img"] = $dates["route"].".png";
			}
		}
		$dates["table"] = "mark";
		$dates["dates"] = $dates;
		
		$response = ModelMark::mdlUpdate($dates);
        return $response;
	}

	
	/*=============================================
	ELIMINAR
	=============================================*/
	static public function ctrDeleteById($params){
		if(isset($params["id"])){
			$params["table"] = "personal";
			$response = ModelAssignation::mdlDeleteById($params);
			return $response;
		}
	}

	/*=============================================
	GET LIST BY CHECKBOX
	=============================================*/
	static public function ctrGetAllCbox(){
        
		$itemMedicines="";
		$params["table"] = "personal";
		$results = ModelAssignation::mdlGetAll($params);

		foreach($results as $key => $value){
            $name = utf8_decode($value["name"]); 
			$itemMedicines.='<option value="'.$value["id"].'">'.$name.'</option>';
        }
        return $itemMedicines;
	}

}