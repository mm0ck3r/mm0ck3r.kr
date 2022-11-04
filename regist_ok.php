<?php
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', '0');

    include './lib/include/sql_conn.php';
    
    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];

    $res = mysqli_query($conn, "INSERT IGNORE INTO tb_user (userid, userpw, username, useremail, usermoney) VALUES('$userid', '$userpw', '$username', '$useremail', 10000)");
    // if (!$res) {
    //     printf("Error: %s\n", mysqli_error($conn));
    //     exit();
    // }
    $data = mysqli_fetch_array($res);
    mysqli_close($conn);
    echo "<script> document.location.href='http://mm0ck3r.kr/'; </script>"; 
?>