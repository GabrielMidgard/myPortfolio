<?php

require_once "connection.php";

class Templete{

	static public function mdlTemplateStyle($params){   
		try{	
			$stmt = Connection::connect()->prepare("SELECT * FROM ".$params["table"]);
			$stmt->execute();
			$result = $stmt->fetch();
			$stmt = null;
			return $result;

		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
        }
		
	}
}