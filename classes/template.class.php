<?php

class Template
{
    public $templateContent;

    function __construct($file)
    {
        $this->templateContent = file_get_contents(__DIR__ . "/../templates/$file.html");
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