<?php
$q = $pdo->prepare("
			SELECT * 
			FROM tbl_language
		");
$q->execute();
$res = $q->fetchAll();
foreach ($res as $row) {
	define($row['name'], $row['value']);
}
?>