<?php

require_once __DIR__ . "/classes/template.class.php";
require_once __DIR__ . "/menu.php";

include "./vendor/autoload.php";
use eftec\bladeone\BladeOne;

global $menu;

/*$baseTemplate = new Template("base");
$infoTemplate = new Template("info");*/
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';



/*$tableBody  = "";*/

$sql = 'SELECT * FROM `INFO`';
$stmt = $menu->pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

/*foreach ($result as $row) {
    $tableBody = "$tableBody<tr><td>$row[LABEL]</td><td>$row[DATA]</td></tr>";
}*/
$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
echo $blade->run('info',["menu_content" => $menu->render(), "body_content" => $result]);

/*echo $baseTemplate->render(array(
    "menu_content" => $menu->render(),
    "body_content" => $infoTemplate->render(array("table_body" => $tableBody))
));*/

require_once("./database/close.php");

?>