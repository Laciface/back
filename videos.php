<?php

require_once __DIR__ . "/classes/template.class.php";
require_once __DIR__ . "/menu.php";

global $menu;
$baseTemplate = new Template("base");

$videos = "";
$sql = 'SELECT * FROM `VIDEO_CONTENT`';
$stmt = $menu->pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $row) {
    $videoTemplate = new Template("video");
    $videos = $videos . $videoTemplate->render(array("video_label" => $row["LABEL"], "video_url" => $row["URL"]));
}

echo $baseTemplate->render(array("menu_content" => $menu->render(), "body_content" => $videos));

require_once("./database/close.php");

?>