<?php
include('core.php');

if (isset($_REQUEST['action'])) {
	if ($_REQUEST['action'] == 'order') {
		$res = writeOrder($_REQUEST['data']);
		echo json_encode($res);
	}
}