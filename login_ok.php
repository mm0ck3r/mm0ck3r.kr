<?php
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');

    include './lib/include/sql_conn.php';
    
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];

    $q = "SELECT * FROM tb_user WHERE userid='$userid' && userpw='$userpw'";
    $res = mysqli_fetch_array(mysqli_query($conn, $q));
    if($res){
        session_start();
        $_SESSION['userid'] = $res['userid'];
        $_SESSION['username'] = $res['username'];
    }
    else{
        echo "<script>alert('login fail')</script>";
    }
    echo "<script>location.href='http://mm0ck3r.kr/'"
?>
