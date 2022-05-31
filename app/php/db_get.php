<?php

require_once('functions.php');
require_once('db_connect.php');

$table = 'users';
$limit = 3;

if (empty($_POST['page'])) {
	$curPage = 1;
} elseif (is_int($_POST['page'])) {
	$curPage = $_POST['page'];
}

$skip = $limit * ($curPage - 1);
$arr = $db->query("SELECT * FROM $table LIMIT $skip, $limit")->fetchAll();
$allRows = $db->query("SELECT COUNT(*) FROM $table")->fetch(PDO::FETCH_COLUMN);
$lastPage = ceil($allRows / $limit);

if ($curPage == 1) {
	$prevDisabled = "disabled";
	$firstPageHidden = $prevDotsHidden = $prevPageHidden = "hidden";
} elseif ($curPage - 1 == 1) {
	$firstPageHidden = $prevDotsHidden = "hidden";
} elseif ($curPage - 2 == 1) {
	$firstPageHidden = "hidden";
} elseif ($curPage + 2 == $lastPage) {
	$lastPageHidden = "hidden";
} elseif ($curPage + 1 == $lastPage) {
	$lastPageHidden = $nextDotsHidden = "hidden";
} elseif ($curPage == $lastPage) {
	$nextDisabled = "disabled";
	$lastPageHidden = $nextDotsHidden = $nextPageHidden = "hidden";
}

foreach($arr as $user) {
	$id = $user['id'];
	$name = $user['name'];
	$email = $user['email'];
	$description = $user['description'];

	echo <<<ROWS
	<tr>
		<td>$id</td>
		<td>$name</td>
		<td>$email</td>
		<td>$description</td>
	</tr>
	ROWS;
}

?>