<?php
$colorOne="#37758c";
$colorTwo="#01a79e";
$colorThree="#139698";
$colorFour="#37758c";
$colorFive="#4f5f84";
$colorSix="#6d437b";
$colorSeven="#6d437b";	

$customeStyleColorConfig ="";
    $customeStyleColorConfig.="<style>";
	
	$customeStyleColorConfig.=".main-menu-wrapper{     background: ".$colorOne." !important; }";
    //menu Bar
    $customeStyleColorConfig.="";
	
	/* Buttons  */
	$customeStyleColorConfig.="
	.btnFilledStyle.btnAccentColor,	.btnOutlineStyle.btnAccentColor:hover {	background-color: ".$templete["lightColor"].";	border: 2px solid #000000;    }
	.btnFilledStyle.btnAccentColor span,	.btnOutlineStyle.btnAccentColor:hover span,	.btnFilledStyle.btnAccentColor span:before,	.btnOutlineStyle.btnAccentColor:hover span:before,	.btnFilledStyle.btnAccentColor a,	.btnOutlineStyle.btnAccentColor:hover a,	.btnFilledStyle.btnAccentColor .btIco a:before,	.btnOutlineStyle.btnAccentColor:hover .btIco a:before,	.btnFilledStyle.btnAccentColor button,	.btnOutlineStyle.btnAccentColor:hover button { color: #fff !important; }
	.btnOutlineStyle.btnAccentColor, .btnFilledStyle.btnAccentColor:hover { 	background-color: transparent;	border: 2px solid ".$templete["lightColor"]."; color: #FFFFFF; }
	.btnOutlineStyle.btnAccentColor span,	.btnFilledStyle.btnAccentColor:hover span,	.btnOutlineStyle.btnAccentColor span:before,	.btnFilledStyle.btnAccentColor:hover span:before,	.btnOutlineStyle.btnAccentColor a,	.btnFilledStyle.btnAccentColor:hover a,	.btnOutlineStyle.btnAccentColor .btIco a:before,	.btnFilledStyle.btnAccentColor:hover .btIco a:before,	.btnOutlineStyle.btnAccentColor button,	.btnFilledStyle.btnAccentColor:hover button { color: #FFFFFF !important; }
	.btnBorderlessStyle.btnAccentColor span, .btnBorderlessStyle.btnNormalColor:hover span,	.btnBorderlessStyle.btnAccentColor span:before,	.btnBorderlessStyle.btnNormalColor:hover span:before,	.btnBorderlessStyle.btnAccentColor a, .btnBorderlessStyle.btnNormalColor:hover a,	.btnBorderlessStyle.btnAccentColor .btIco a:before,	.btnBorderlessStyle.btnNormalColor:hover .btIco a:before, .btnBorderlessStyle.btnAccentColor button, .btnBorderlessStyle.btnNormalColor:hover button { color: ".$templete["primaryColor"].";}";
	$customeStyleColorConfig.=".btn-MidgardCommerce{ background-color:".$templete["lightColor"]." !important; color: #FFFFFF !important;}";
	$customeStyleColorConfig.=".btn-MidgardCommerce:hover{ background-color:".$templete["primaryColor"]." !important}";

	$customeStyleColorConfig.="
	.btn-circle.btn-circle-MidgardCommerce{color:".$templete["lightColor"]."}
	.btn-circle.btn-circle-MidgardCommerce:before{background-color:".$templete["lightColor"]."}
	.btn-circle.btn-circle-MidgardCommerce:hover,.btn-circle.btn-circle-MidgardCommerce:focus{color:#fff}
	.btn-circle.btn-circle-raised.btn-circle-white.btn-circle-MidgardCommerce{color:".$templete["lightColor"]."}
	.btn-circle.btn-circle-raised.btn-circle-MidgardCommerce{background-color:".$templete["lightColor"]."}
	.btn-circle.btn-circle-raised.btn-circle-MidgardCommerce:before{background-color:".$templete["primaryColor"]."}
	";

	
	$customeStyleColorConfig.="</style>";

?>