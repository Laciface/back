<?php

require_once(dirname(__FILE__) . "/classes/template.class.php");
require_once(dirname(__FILE__) . "/menu.php");

global $menu;
$baseTemplate = new Template("base");

$videos = "";
$videosResult = mysql_query(" SELECT * FROM `VIDEO_CONTENT` ");
while ($row = mysql_fetch_assoc($videosResult)) {
    $videoTemplate = new Template("video");
    $videos = $videos . $videoTemplate->render(array("video_label" => $row["LABEL"], "video_url" => $row["URL"]));
}

echo $baseTemplate->render(array("menu_content" => $menu->render(), "body_content" => $videos));

require_once("./database/close.php");

?>