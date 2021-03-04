<?php


use app\models\Question;

class Menu2
{
    private ?PDO $pdo;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->pdo = DBConnection::connectToDatabase();
    }
    public $menu = array();

    function Menu()
    {
        $pdo = $this->pdo;
        $sql = 'SELECT * FROM `MENU` ORDER BY `POSITION` ASC';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach ($result as $row) {
            array_push($this->menu, $row);
        }
    }

    function render()
    {
        $menuContent = "";
        for ($i = 0; $i < count($this->menu); $i++) {
            $menuContent = $menuContent . sprintf('<a href="%s">', $this->menu[$i]["FILE"]) . $this->menu[$i]["LABEL"] . "</a>&nbsp;";
        }

        return $menuContent;
    }
}