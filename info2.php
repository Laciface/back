<?php

require_once(dirname(__FILE__) . "/classes/template.class.php");
require_once(dirname(__FILE__) . "/menu.php");

global $menu;
$baseTemplate = new Template("base");
$infoTemplate = new Template("info");

$tableBody  = "";

$sql = 'SELECT * FROM `INFO`';
$stmt = $menu->pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $row) {
    $tableBody = "$tableBody<tr><td>$row[LABEL]</td><td>$row[DATA]</td></tr>";
}

echo $baseTemplate->render(array(
    "menu_content" => $menu->render(),
    "body_content" => $infoTemplate->render(array("table_body" => $tableBody))
));

require_once("./database/close.php");

?>