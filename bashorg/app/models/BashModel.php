<?php

class BashModel extends Model {

	function __construct() {
		parent::__construct();
	}

	public $quotesOnPage = 10;


    public function showQuotes($pageID) {
    	$quotes = [];

    	$sql = 'SELECT * FROM `quotes` ORDER BY `id` DESC LIMIT '.$this->quotesOnPage*$pageID.', '.$this->quotesOnPage;
    	$sqlres = $this->mysqli->query ($sql) or die($sql);
    	while ($result = $sqlres->fetch_array(MYSQLI_ASSOC)) {
    		$quotes[] = $result;
    	}
    	return $quotes;

    }

    public function showQuote($id) {
    	$quote = [];

    	$sql = 'SELECT * FROM `quotes` WHERE `id`="'.$id.'"';
    	$sqlres = $this->mysqli->query ($sql) or die($sql);
    	if ($result = $sqlres->fetch_array(MYSQLI_ASSOC)) {
    		$quote[] = $result;
    	}
    	return $quote;

    }

    public function post($text) {
    	$text = $this->mysqli->real_escape_string($text);

    	$sql = 'INSERT INTO `quotes` (`text`) VALUES ("'.$text.'")';
    	$sqlres = $this->mysqli->query ($sql) or die($sql);
    }

    public function getPagesCount() {
    	$count = 0;
    	$sql = 'SELECT COUNT(*) FROM `quotes`';
    	$sqlres = $this->mysqli->query ($sql) or die($sql);
		if ($result = $sqlres->fetch_array(MYSQLI_NUM)) {
			$count = $result[0];
		}
		$count = ceil($count/$this->quotesOnPage);
		return $count;
	}
}