<?php

class BashController extends Controller {
    function __construct() {
        parent::__construct();
        $this->model = new BashModel();
    }

    function showQuotes($pageID) {
        $quotes = $this->model->showQuotes($pageID);
        $pagesCount = $this->model->getPagesCount();

        $params = [
            "pageTitle" => "Все цитаты",
             "quotes" => $quotes,
             "pagesCount" => $pagesCount
        ];

        $this->view->generate("showQuotes.php", "baseTemplate.php", $params);
    }

    function showQuote($id) {
        $quote = $this->model->showQuote($id);

        $params = [
            "pageTitle" => "Цитата №".$id,
             "quote" => $quote
        ];

        $this->view->generate("showQuote.php", "baseTemplate.php", $params);
    }

    function add() {
        $params = [
            "pageTitle" => "Новая цитата"
        ];

        $this->view->generate("add.php", "baseTemplate.php", $params);
    }

    function post() {
        $text = $_POST['text'];
        $this->model->post($text);
    }
}