<?

require_once(dirname(__FILE__) . "/classes/template.class.php");
require_once(dirname(__FILE__) . "/menu.php");

global $menu;
$baseTemplate = new Template("base");
$schematicsTemplate = new Template("schematics");
echo $baseTemplate->render(array("menu_content" => $menu->render(), "body_content" => $schematicsTemplate->render()));

require_once("./database/close.php");

?>