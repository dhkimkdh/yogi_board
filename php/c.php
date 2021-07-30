<?php

$a = date("y/m/d");
$b = substr("abdded",3,2);
$c = rand(1,46);
$d = filesize("a.php");

echo "<h1>오늘은 $a 입니다.</h1><br>";
echo "abddedd의 3번 뒤의 2글자는 $b 입니다..</br>";
echo "마지막 로또 번호는 $c 입니다.</br>";
echo "a.php파일의 크기는 $d byte입니다.</br>";

?>
