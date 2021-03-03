<?

class   Template
{
    var $templateContent;

    function Template($file)
    {
        $this->templateContent = file_get_contents(dirname(__FILE__) . "/../templates/$file.html");
    }

    function render($parameters = array())
    {
        $renderedContent = $this->templateContent;
        foreach ($parameters as $parameter => $content) {
            $renderedContent = str_replace("<($parameter)>", $content, $renderedContent);
        }

        return $renderedContent;
    }
}

?>