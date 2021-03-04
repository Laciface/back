<?php

require_once(dirname(__FILE__) . "/classes/template.class.php");
require_once(dirname(__FILE__) . "/classes/Menu.php");

global $menu;
$baseTemplate = new Template("base");
$indexTemplate = new Template("index");
echo $baseTemplate->render(array("menu_content" => $menu->render(), "body_content" => $indexTemplate->render()));

require_once("./database/close.php");

?>