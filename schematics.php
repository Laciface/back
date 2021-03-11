<?php
/*use Jenssegers\Blade\Blade;*/
include "./vendor/autoload.php";
use eftec\bladeone\BladeOne;

require_once __DIR__ . "/classes/template.class.php";
require_once __DIR__ . "/menu.php";

global $menu;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new BladeOne($views, $cache, BladeOne::MODE_DEBUG);
echo $blade->run('schematics',["menu_content" => $menu->render()]);

require_once("./database/close.php");

?>