<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/log_sign.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Start partie one -->
    <div class="one">
        <div class="container">
            <h1>Log in</h1>
            <form action="" name="f1">
                <div class="box-input">
                    
                    <input type="text" name="username" id="1" onchange="modifierDesign(this, 'username')" required autofocus>
                    <div class="placeholder" id="username" onclick="cacher('1')">Username</div>
                </div>
                <div class="box-input">
                    <input type="password" name="password" id="2" onchange="modifierDesign(this, 'password')" required>
                    <div class="placeholder" id="password" onclick="cacher('2')">password</div>
                </div>
                <button name="b1">LOG IN</button>
            </form>
            
        </div>
    </div>
    <!-- End partie one -->
    <!-- Start partie two-->
    <div class="two">
        <div class="showblur"></div>
        <div class="links">
            <ul>
                <li><a href="../index.html">ACCUEIL</a></li>
                <li><a href="mailto:hotel@gmail.com">CONTACT</a></li>
                <li><a href="signup.html">SIGN UP</a></li>
                <li><a href="login.html" class="checked">LOG IN</a></li>
                
            </ul>
        </div>
    </div>
    <!-- End partie two -->
    <script src="../js/login.js"></script>
</body>
</html>