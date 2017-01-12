<?php

class Route {
    static function start() {
        $uri = @explode("/", $_GET["page"]);
        $action = in_array(@$uri[0], ['add', 'showQuotes', 'showQuote', 'post']) ? $uri[0] : 'showQuotes';

        $controller = new BashController();
        switch ($action) {
            case "showQuotes":
                if (isset($uri[1])) {
                    $controller->showQuotes($uri[1]);
                }
                else {
                    $controller->showQuotes(0);
                }
                break;
            case "showQuote":
                $controller->showQuote($uri[1]);
                break;
            case "add":
                $controller->add();
                break;
            case "post":
                $controller->post();
                header("Location: /bash");
                break;
            default:
                // Should never execute
        }
    }
}