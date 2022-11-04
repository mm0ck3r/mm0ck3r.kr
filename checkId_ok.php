<?php
    include './lib/include/sql_conn.php';
    $userid = $_GET['userid'];
    $res = mysqli_query($conn, "select useridx from tb_user where userid='$userid'");
    $data = mysqli_fetch_array($res);
    echo isset($data['useridx']) ? "X" : "O";
?>