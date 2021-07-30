<?php

echo 'php에서 2021-07-30 자료입력하기';
$dbc = mysqli_connect('localhost', 'root', 'autoset', 'bbs') or die('DB접속 에러!');

$query = "insert into yg_bbs (bbs_datetime, bbs_subject) values ('2021-07-30', 'php에서 test')" ;

mysqli_query($dbc,$query) or die('자료 입력 에러');

?>

