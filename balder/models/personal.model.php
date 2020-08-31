<?php

class Personal{
	/*=============================================
	CREAR
	=============================================*/
	static public function mdlCreate($params){
        try{   
			$stmt = Connection::connect()->prepare("
			INSERT INTO ".$params["table"]."  
			(name, route, img, active) 
			VALUES (:name, :route, :img, :active)");

			$stmt->bindParam(":name", $params["dates"]["name"], PDO::PARAM_STR);
			$stmt->bindParam(":route", $params["dates"]["route"], PDO::PARAM_STR);
			$stmt->bindParam(":img", $params["dates"]["img"], PDO::PARAM_STR);
			$stmt->bindParam(":active", $params["dates"]["active"], PDO::PARAM_INT);
			
			if($stmt->execute()){
				$stmt = null;
				return "success";
			}

		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
	}

	/*=============================================
	EDITAR
	=============================================*/
	static public function mdlUpdate($params){
		try{   
			$result = null;
			$stmt = Connection::connect()->prepare("
			UPDATE ".$params["table"]."
			SET name = :name, 
			route = :route, 
			img = :img
			
			WHERE id = :id");
			
			$stmt->bindParam(":name", $params["dates"]["name"], PDO::PARAM_STR);
			$stmt->bindParam(":id", $params["dates"]["id"], PDO::PARAM_INT);
			$stmt->bindParam(":route", $params["dates"]["route"], PDO::PARAM_STR);
			$stmt->bindParam(":img", $params["dates"]["img"], PDO::PARAM_STR);

			$result =$stmt->execute();

			if($result){
				$stmt = null;
				return "success";
			}
		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
		
	}

	/*=============================================
	MOSTRAR 
	=============================================*/
	static public function mdlGetAll($params){
		try{ 
			$result =null;
			$stmt = Connection::connect()->prepare("SELECT * FROM ".$params["table"]." WHERE active = 1 ORDER BY id DESC");
			$stmt->execute();
			$result = $stmt->fetchAll();
			$stmt = null;
			return $result;
		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
	}

	static public function mdlGet($params){
		try{ 
			$stmt = Connection::connect()->prepare("SELECT * FROM ".$params["table"]);
			$stmt->execute();
			$stmt->fetch();
			$result = $stmt->fetch();

			$stmt = null;
			return $result;
			
		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
	}

	static public function mdlShow($params){
		try{ 
			$result =null;
			if($params["item"] != null){
				$stmt = Connection::connect()->prepare("SELECT * FROM ".$params["table"]." WHERE ".$params["item"]." = :".$params["item"]);
				$stmt->bindParam(":".$params["item"], $params["value"], PDO::PARAM_STR);
				$stmt->execute();
				$stmt->fetch();
				$result = $stmt->fetch();

				$stmt = null;
				return $result;
			}else{
				$stmt = Connection::connect()->prepare("SELECT * FROM ".$params["table"]." ORDER BY id DESC");
				$stmt->execute();
				$result = $stmt->fetchAll();

				$stmt = null;
				return $result;
			}
		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
	}

	/*=============================================
	MOSTRAR
	=============================================*/
	static public function mdlGetById($params){
		$result=null;
		if($params["column"] != null){
			$stmt = Connection::connect()->prepare("SELECT * FROM ".$params["table"]." WHERE ".$params["column"]." = :".$params["column"]);
			$stmt->bindParam(":".$params["column"], $params["value"], PDO::PARAM_INT);
			$stmt->execute();
			$result=$stmt->fetch();
			$stmt = null;
			return $result;

		}else{
			$stmt = Connection::connect()->prepare("SELECT * FROM ".$params["table"]." ORDER BY id DESC");
			$stmt->execute();
			
			$result=$stmt->fetchAll();
			$stmt = null;
			return $result;
		}
		
	}

	

	

	/*=============================================
	ELIMINAR CATEGORIA
	=============================================*/
	static public function mdlDeleteById($params){
		$result=null;
		$stmt = Connection::connect()->prepare("DELETE FROM ".$params["table"]." WHERE id = :id");
		$stmt -> bindParam(":id", $params["id"], PDO::PARAM_INT);

		$result= $stmt -> execute();

		if($result){
			$stmt = null;
			return "success";
		}else{
			$stmt = null;
			return "error_model";	
		}
	}
	/*=============================================
	ACTIVAR CATEGORIA
	=============================================*/
	static public function mdlActiveById($params){
		try{   
			$stmt = Connection::connect()->prepare("
			UPDATE ".$params["table"]." 
			SET active = :active 
			WHERE id = :id");
			$stmt->bindParam(":active", $params["dates"]["active"], PDO::PARAM_INT);
			$stmt->bindParam(":id", $params["dates"]["id"], PDO::PARAM_INT);

			$result = $stmt->execute();
			if($result){
				$stmt = null;
				return "success";
			}
		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
	}


	static public function mdlGetSemestersByCareer($params){
		try{ 
			$result =null;
			$route="ingenieria-sistemas-computacionales";
			$stmt = Connection::connect()->prepare("
			SELECT cs.id, cs.name, cs.semester FROM ".$params["table"] ." cs 
			INNER JOIN careers c 
				on cs.fk_career = c.id 
			WHERE c.route = :route");
			;
			$stmt->bindParam(":route", $route, PDO::PARAM_STR);
			
			$stmt->execute();
			$result = $stmt->fetchAll();


			$stmt = null;
			return $result;
			
		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
	}

	static public function mdlGetAssignationsBySemester($params){
		try{ 
			$result =null;
			$stmt = Connection::connect()->prepare("
			SELECT a.id, a.name, a.description, a.hours, a.specialty 
			FROM ".$params["table"] ." a 
			
			INNER JOIN career_semesters cs 
				ON a.fk_semester = cs.id 
				
			WHERE cs.semester = :semester");
	
			$stmt->bindParam(":semester", $params["value"], PDO::PARAM_INT);
			
			$stmt->execute();
			$result = $stmt->fetchAll();


			$stmt = null;
			return $result;
			
		}catch(PDOException $error){
			$stmt = null;
			return "error_model: ".$error->getMessage();
		}
	}
}