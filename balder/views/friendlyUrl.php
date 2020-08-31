<?php
/*=============================================
CONTENIDO DINÁMICO
=============================================*/

$routes = array();
$routeValidate = null;
$routeEvent = null;
$routeBlog = null;
$markRouteValidate = null;
$infoProduct = null;
$routeValidateMark = null;



if(isset($_GET["route"])){

    $routes = explode("/", $_GET["route"]);

    $item = "route";
    $value =  $routes[0];

    $params["item"]=$item;
    $params["column"]=$item;
    $params["value"] =  $value;

    $paramsRoute["item"] = $item;
    $paramsRoute["value"] =  $value;

    /*=============================================
    URL'S amigables Marcas
    =============================================
    $routeMark= ControllerMark::ctrGetMarks($params);
    if($routeMark!= null){
        if($params["value"]==$routeMark['route']){
            $routeValidateMark = $value;
        }
    }*/
    /*=============================================
    URL'S amigables Cursos
    =============================================
    $routeCategory= ControllerProducts::getCategory($params);
    if($routeCategory!= null){
        if($params["value"]==$routeCategory[0]['route']){
            $routeValidate = $value;
        }
    }*/

    
    /*=============================================
    URL's amigables de blog
    =============================================
    $routeBlog= ControllerBlog::getShowInfo($params);
    if($params["value"] == $routeBlog["route"]){
        $routeBlog = $params["value"];
    }*/

    /*=============================================
    Lista blanca URL's amigables
    =============================================*/
    if($routes[0] == "index"){
        include_once("modules/section_banner.php");
        include_once("modules/section_landing_careers.php");//.Carreras
        include_once("modules/section_landing_progress.php"); // /progress 
        include_once("modules/section_landing_events.php");//.event-section
        include_once("modules/section_landing_contact-us.php");
        include_once("modules/section_landing_latest-news.php");
        include_once("modules/section_landing_testimonials-faqs.php");
        include_once("modules/section_subscribe.php");
    }  

    else if($routes[0] == "mision-vision"){
        include "modules/mision_vision.php";
    }
    else if($routes[0] == "ingenieria-sistemas-computacionales" || $routes[0] == "ingenieria-gestion-empresarial" || $routes[0] == "ingenieria-industrial" || $routes[0] == "ingenieria-electronica" || $routes[0] == "ingenieria-civil" || $routes[0] == "licenciatura-gastronomia" || $routes[0] == "maestria-sistemas-computacionales" || $routes[0] == "ingenieria-electromecanica"){
        include "modules/careerDescription.php";
    }
    else if($routes[0] == "becas"){
        include "modules/scholarships.php";
    }
    else if($routes[0] == "carreras"){
        include "modules/careers.php";
    }
    else if($routes[0] == "alumnos-admitidos"){
        include "modules/studentsAdmitted.php";
    }
    else if($routes[0] == "preguntas-frecuentes"){
        include "modules/faqs.php";
    }
    else if($routes[0] == "pre-inscripcion"){
        include "modules/preInscription.php";
    }
    else if($routes[0] == "valores"){
        include "modules/valors.php";
    }
    else if($routes[0] == "directorio"){
        include "modules/directory.php";
    }
    else if($infoProduct != null){
        include "modules/productDetails.php";
    }
    else if($routes[0] == "search"){
        include "modules/search.php";
    }
    else if($routes[0] == "login"){
        include "modules/login.php";
    }
    else if($routes[0] == "salir"){
        include "modules/logout.php";
    }
    else if($routes[0] == "register"){
        include "modules/register.php";
    }
    else if($routes[0] == "contactanos"){
        include "modules/section_contact.php";
    }
    else if($routes[0] == "olvidaste-tu-password"){
        include "modules/forgetPassword.php";
    }
    else if($routes[0] == "carrito-de-compra"){
        include "modules/shoppingCart.php";
    }
    else if($routes[0] == "realizar-pago"){
        include "modules/checkOut.php";
    }
    else if($routes[0] == "direcciones"){
        include "modules/addAddress.php";
    }
    else if($routes[0] == "finalizar-compra"){
        include "modules/final-purchase.php";
    }
    else if($routes[0] == "verificar"){
        include "modules/verifyMail.php";
    }

    else if($routes[0] == "blog"){
        include "modules/blog.php";
    }
    else if($routes[0] == "events"){
        include "modules/events.php";
    }
    
    else if($routes[0] == "logout"  || $routes[0] == "buscador"  || $routes[0] == "error" ||  $routes[0] == "ofertas"){
		include "modules/".$routes[0].".php";
    }
    else if($routes[0] == "error404" ){
        include "modules/productDetails.php";
		//include "modules/".$routes[0].".php";
    }
    else if($routes[0] == "profile" || $routes[0] == "perfil"){
		include "modules/profile.php";
	}
    
    
    else if($routeEvent != null){
        include "modules/eventDetails.php";
    }
    
    else if($routeBlog != null){
        include "modules/blogDetails.php";
    }
    
    else{
        
        include "modules/error404.php";
        //echo($routes[0]."test");
    }
}else{
    include_once("modules/section_banner.php");
    include_once("modules/section_landing_careers.php");//.Carreras
    include_once("modules/section_landing_progress.php"); // /progress 
    include_once("modules/section_landing_events.php");//.event-section
    include_once("modules/section_landing_contact-us.php");
    include_once("modules/section_landing_latest-news.php");
    include_once("modules/section_landing_testimonials-faqs.php");
    include_once("modules/section_subscribe.php");
}
?>