<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt=$APPLICATION->IncludeComponent(
	"max22:menu.sections.elements",
	 "", 
	 array(
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "1",
		"DEPTH_LEVEL" => "5",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	),
	false
);
$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
?>
