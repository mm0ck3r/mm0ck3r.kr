<?php
    session_start();
    $notlogin = <<<EOD
    <head>
        <title>login</title>
    </head>
    <body>
        <div>
            <h1>Welcome to mm0ck3r Casino</h1>
            <form action="login_ok.php" method="post">
                <p><input type="text" name="userid" id="userid" placeholder="ID"></p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <p class="forgetpw"><a href="changepw.php">Forget Password?</a></p>
                <p><input type="submit" value="Login" class="login_btn"></p>
            </form>
            <p class="regist_btn">You are not member of a casino? &nbsp;</p>
            <p><a href="regist.php">=> Sign Up, Hurry Up!</a></p>
        </div>
    </body>
    EOD;

    $logined = <<<EOD
    <head>
        <title>login</title>
    </head>
    <body>
        <div>
            <h1>Welcome to mm0ck3r Casino</h1>
            <form action="login_ok.php" method="post">
                <p><input type="text" name="userid" id="userid" placeholder="ID"></p>
                <p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>
                <p class="forgetpw"><a href="changepw.php">Forget Password?</a></p>
                <p><input type="submit" value="Login" class="login_btn"></p>
            </form>
            <p class="regist_btn">You are not member of a casino? &nbsp;</p>
            <p><a href="regist.php">=> Sign Up, Hurry Up!</a></p>
        </div>
    </body>
    EOD;

    if(isset($_SESSION['username'])) echo "<script>location.href='http://mm0ck3r.kr/main.php'</script>";
    else echo $logined;
    

