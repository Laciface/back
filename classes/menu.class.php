<?php

include '../database/connect.php';

class Menu
{
    public ?PDO $pdo;
    public array $queryResult = array();

    function __construct()
    {
        $this->pdo = connect();
        $pdo = $this->pdo;
        $sql = 'SELECT * FROM `MENU` ORDER BY `POSITION` ASC';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        foreach ($result as $row) {
            array_push($this->queryResult, $row);
        }
    }

    function render()
    {
        $menuContent = "";
        for ($i = 0; $i < count($this->queryResult); $i++) {
            $menuContent = $menuContent . sprintf('<a href="%s">', $this->queryResult[$i]["FILE"]) . $this->queryResult[$i]["LABEL"] . "</a>&nbsp;";
        }

        return $menuContent;
    }
}

/*$example = new Menu();
print_r($example->queryResult);*/
?>