<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/log_sign.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/signup.css">
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
            <h1>Sign up</h1>
            <div class="hbox">
                <i class="fa-solid fa-1"></i>
                <hr>
                <i class="fa-solid fa-2"></i>
            </div>
            <form action="" name="f1">
                <div class="box-input">
                    <input type="text" name="cin" id="1" onchange="modifierDesign(this, 'cin')" required>
                    <div class="placeholder" id="cin" onclick="cacher('1')">cin</div>
                </div>

                <div class="box-input">
                    <input type="text" name="nom" id="2" onchange="modifierDesign(this, 'nom')" required>
                    <div class="placeholder" id="nom" onclick="cacher('2')">nom</div>
                </div>

                <div class="box-input">
                    <input type="text" name="prenom" id="3" onchange="modifierDesign(this, 'prenom')" required>
                    <div class="placeholder" id="prenom" onclick="cacher('3')">prenom</div>
                </div>

                <div class="box-input">
                    <input type="text" name="adresse" id="4" onchange="modifierDesign(this, 'adresse')" required>
                    <div class="placeholder" id="adresse" onclick="cacher('4')">adresse</div>
                </div>

                <div class="box-input">
                    <input type="text" name="email" id="5" onchange="modifierDesign(this, 'email')" required>
                    <div class="placeholder" id="email" onclick="cacher('5')">email</div>
                </div>

                <div class="box-input">
                    <input type="text" name="telephone" id="6" onchange="modifierDesign(this, 'telephone')" required>
                    <div class="placeholder" id="telephone" onclick="cacher('6')">telephone</div>
                </div>
                
                <button name="b1">NEXT</button>
            </form>

            <form action="" name="f2">
                <div class="box-input">
                    
                    <input type="text" name="username" id="7" onchange="modifierDesign(this, 'username')" required autofocus>
                    <div class="placeholder" id="username" onclick="cacher('7')">Username</div>
                </div>
                <div class="box-input">
                    <input type="password" name="password" id="8" onchange="modifierDesign(this, 'password')" required>
                    <div class="placeholder" id="password" onclick="cacher('8')">password</div>
                </div>
                <button name="b2">NEXT</button>

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
                <li><a href="signup.html" class="checked">SIGN UP</a></li>
                <li><a href="login.html">LOG IN</a></li>
                
            </ul>
        </div>
    </div>
    <!-- End partie two -->
    <script src="../js/signup.js"></script>
</body>
</html>