<!-- regist.php -->
<head>
    <title>Register</title>
    <script src="./lib/js/regist.js"></script>
</head>
<body>
    <div>
        <h1>Regist to mm0ck3r Casino!</h1>
        <?php
            session_start();
            if(!isset($_SESSION['username'])){
                echo '<form action="regist_ok.php" method="post" name="regiform" id="regist_form" class="form" onsubmit="return sendit()">'
                echo '<p><input type="text" name="userid" id="userid" placeholder="ID"></p>'
                echo '<p><input type="password" name="userpw" id="userpw" placeholder="Password"></p>'
                echo '<p><input type="password" name="userpw_ch" id="userpw_ch" placeholder="Password Check"></p>'
                echo '<p><input type="text" name="username" id="username" placeholder="Name"></p>'
                echo '<p><input type="text" name="useremail" id="useremail" placeholder="E-mail"></p>'
                echo '<p><input type="submit" value="Sign Up" class="signup_btn"></p>'
                echo '<p class="pre_btn">Already join? <a href="index.php">Login.</a></p>'
                echo '</form>'
            }
            else{
                echo '<p>you already Joined</p>'
                echo '<p>Happy time ❤️</p>'
            }
        ?>
    </div>
</body>