<?php

ini_set("display_errors", "on");
error_reporting(E_ALL);


$config['MYSQL_SERVER'] 	= 'localhost';
$config['MYSQL_DB'] 		= 'demo_shop';
$config['MYSQL_USER'] 		= '*******';
$config['MYSQL_PASSWORD'] 	= '*******';

$mysqli = new MySQLi($config['MYSQL_SERVER'],$config['MYSQL_USER'],$config['MYSQL_PASSWORD'],$config['MYSQL_DB']);

if ($mysqli->connect_error) {
	die('Ошибка подключения (' . $mysqli->connect_errno . ') '. $mysqli->connect_error);
}


function getMainMenu() {
	global $mysqli;

    $parents = [];

	$sql = 'SELECT * FROM `menu`';
	$sqlres = $mysqli->query ($sql) or die($sql);
	while ($result = $sqlres->fetch_array(MYSQLI_ASSOC)) {
		$parents[] = [$result['id'], $result['parent_id'], $result['name'], "#"];
	};


    $tree = _buildTree($parents);

    return $tree[1];
}

function _buildTree($list, $parentId = 0) {
    $tree = [];
    $ul = "<ul>";

    $j = 0;
    for($i = 0; $i < count($list); $i++) {
        if($list[$i][1] == $parentId) {
            $tree[$list[$i][0]] = [];
            $ul .= "<li><a href=\"{$list[$i][3]}\">{$list[$i][2]}</a>";

            if($res = _buildTree($list, $list[$i][0])) {
                $tree[$list[$i][0]] = $res[0];
                $ul .= $res[1];
            }
            $ul .= "</li>";
        }
    }

    $ul .= "</ul>";

    return count($tree) ? [$tree, $ul] : false;
}

function writeOrder($params) {
	global $mysqli;

	$keys = "";
	$values = "";
	$i = 0;
	$max = count($params)-1;

	foreach ($params as $key => $value) {
		$key = $mysqli->real_escape_string($key);
		$value = $mysqli->real_escape_string($value);
		if ($i < $max) {
			$keys .= "`".$key."`, ";
			$values .= '"'.$value.'", ';
		}
		else {
			$keys .= "`".$key."`";
			$values .= '"'.$value.'"';
		}
		$i++;

	}

	$sql = 'INSERT INTO `orders` ('.$keys.') VALUES ('.$values.')';
	$sqlres = $mysqli->query ($sql) or die($sql);

	return ["response" => 1];
}
