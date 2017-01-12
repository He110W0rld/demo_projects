<?php

class View {
    function __construct() {
        require __DIR__ . '/../plugins/Mustache/Autoloader.php';
        Mustache_Autoloader::register();
        $this->mustacheEngine = new Mustache_Engine;
    }

    function generate($pageTemplateName, $baseTemplateName, $data = []) {
        $template = file_get_contents(__DIR__."/../views/".$baseTemplateName);
        $pageTemplate = file_get_contents(__DIR__."/../views/".$pageTemplateName);
        $template = str_replace("{{pageContents}}", $pageTemplate, $template);
        $data['pageLinks'] = [];
        for ($i = 0; $i < $data['pagesCount']; $i++) {
        	$data['pageLinks'][] = ['title' => $i+1, "link" => "showQuotes/".$i];
        }
//        $template = preg_replace_callback('/\{\{([a-z\_]+)\}\}/i', function($m) use ($data) { return isset($data[$m[1]]) ? $data[$m[1]] : $m[0]; }, $template);
        $result = $this->mustacheEngine->render($template, $data);

        echo $result;
    }
}