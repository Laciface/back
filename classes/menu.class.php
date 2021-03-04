<?

class Menu
{
    public array $menu = array();

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
        for ($i = 0; $i < count($this->queryResult); $i++) {
            $menuContent = $menuContent . sprintf('<a href="%s">', $this->queryResult[$i]["FILE"]) . $this->queryResult[$i]["LABEL"] . "</a>&nbsp;";
        }

        return $menuContent;
    }
}

?>