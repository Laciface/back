<?php

require_once __DIR__ . "/classes/template.class.php";
require_once __DIR__ . "/menu.php";

global $menu;
$baseTemplate = new Template("base");
echo $baseTemplate->render(array(
    "menu_content" => $menu->render(),
    "body_content" => "<h1>Info</h1>Created by the One and Only Doctor Emmett Brown"
));

require_once("./database/close.php");

?>