<?php

    echo 'db에 있는 내용을 한줄씩 꺼내어 보여주기<br>';

    $dbc = mysqli_connect('localhost', 'root', 'autoset', 'bbs') or die('db접속에러');
    $query = "select bbs_bno, bbs_datetime, bbs_subject from yg_bbs" ;
    $result = mysqli_query($dbc, $query) or die('쿼리 에러!');

    while ($row = mysqli_fetch_array($result)) {
      // mysqli_fetch_array 배열에 저장되어 있는 것을 한줄씩 꺼내는 명령어


        echo $row['bbs_bno'] . ' ';
        echo $row['bbs_datetime'] . ' ';
        echo $row['bbs_subject'] . ' ';
        echo '<br>';

        $a = $row['bbs_bno'];
        $b = $row['bbs_datetime'];
        $c = $row['bbs_subject'];
        echo "<strong> $a </strong>" . " $b " . " $c <br>" ;
        echo '<br>';



    }
    ?>
