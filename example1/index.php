<?php 
include('core/core.php');
$template = file_get_contents("tpl/index.tpl.php");

$templateVariables = [
	"mainMenu" => getMainMenu()
];

$output = preg_replace_callback('/\{\{([a-zA-Z\_]+)\}\}/i', function($m) use ($templateVariables) { 
	return isset($templateVariables[$m[1]]) ? $templateVariables[$m[1]] : $m[0]; 
}, $template);

echo $output;




?>