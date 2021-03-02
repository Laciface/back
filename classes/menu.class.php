<?

class Menu
{
    var $queryResult;

    function Menu()
    {
        $mySQLResult       = mysql_query(" SELECT * FROM `MENU` ORDER BY `POSITION` ASC ");
        $this->queryResult = array();
        while ($row = mysql_fetch_assoc($mySQLResult)) {
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

?>