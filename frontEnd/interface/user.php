<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/user.css">
    <link rel="stylesheet" href="../css/compte.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <!-- START SHOW BLUR -->
    <div class="showblur" onclick="closeModelReservation()">

    </div>
    <!-- END SHOW BLUR -->
    <!-- START MODEL ADD -->
    <div class="model-add model-addReservation">
        <form action="" name="form_ajout">
            
            <div>
                <label for="cin">CIN</label>
                <input type="number" name="cin" id="cin">
            </div>
            <div>
                <label for="dateDebut">Date Debut</label>
                <input type="date" name="dateDebut" id="dateDebut">
            </div>
            <div>
                <label for="dateFin">Date Fin</label>
                <input type="date" name="dateFin" id="dateFin">
            </div>
            <div>
                <label for="numeroC">Chambre</label>
                <select name="chambre" id="numeroC">
                    <option value="simple">simple</option>
                    <option value="double">double</option>
                    <option value="suite">suite</option>
                </select>
            </div>
            <div class="boxbar">
                <input type="reset" value="Reset" class="b-reset">
                <button class="b-annuler" onclick="closeModel()">Annuler</button>
                <button class="b-add" onclick="add()">Valider</button>
            </div>

        </form>
    </div>
    <!-- END MODEL ADD -->
    <!-- Start Header  -->
    <div class="header">
    
        <div class="container">
            <div class="logo">
                <div class="showblurimg"></div>
                <img src="../image/logo.png" alt="">
            </div>
            
            <dic class="contact">
                <ul>
                    <li ><a href="" id="phone"><i class="fa-solid fa-phone" ></i></a></li>
                    <li><a href="mailto:hotel@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                </ul>
                <div class="phone">
                    <ul>
                        <li>+216 71 00 12 98</li>
                        <li>+216 71 00 12 98</li>
                        
                    </ul>
                </div>
                
            </dic>
        </div>
    </div>
    <!-- End Header  -->
    <div class="content">
        <div class="sidebar">
            <ul>
                <li><button onclick="showreservation()" >RESERVATION</button></li>
                <li><button onclick="showhistorique()" >HISTORIQUE</button></li>
                <li><button onclick="showmoncompte()">MON COMPTE</button></li>
                <li><a href="../index.html">Log Out</a></li>
            </ul>
        </div>
        
        <div class="section">
            <div class="container">
                <!-- Start RESERVATION  -->
                <div class="reservation">
                    <button>DELETE</button>
                    <button class="b-add" onclick="openModelReservation('add()')">AJOUTER</button> 
                    <input type="search" name="search" id="">
                    <div class="cards">
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdateReservation(33,this)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdateReservation(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdateReservation(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdateReservation(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdateReservation(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdateReservation(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- End RESERVATION  -->
                <!-- Start HISTORIQUE  -->
                <div class="historique">
                    <button>DELETE</button>
                    <input type="search" name="search" id="">
                    <div class="cards">
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chambre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chambre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chambre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chambre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chambre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chambre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                        </div>
                        
                        
                    </div>
                    
                </div>
                <!-- End HISTORIQUE -->
                <!-- Start moncompte -->
                <div class="moncompte">
                    <button>DELETE</button>
                    <button id="upclient" onclick="showUpdateclient(this)">UPDATE CLIENT</button>
                    
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
                        
                        <button >UPDATE</button>
                    </form>
                    <button id="upcompte" onclick="showUpdatecompte(this)">UPDATE COMPTE</button>
                    <form action="" name="f2">
                        <div class="box-input">
                            
                            <input type="text" name="username" id="7" onchange="modifierDesign(this, 'username')" required autofocus>
                            <div class="placeholder" id="username" onclick="cacher('7')">Username</div>
                        </div>
                        <div class="box-input">
                            <input type="password" name="password" id="8" onchange="modifierDesign(this, 'password')" required>
                            <div class="placeholder" id="password" onclick="cacher('8')">password</div>
                        </div>
                        <button name="b2">UPDATE</button>
        
                    </form>
                </div>
                <!-- End moncompte -->
                <script src="../js/user.js"></script>
                <script src="../js/reservation.js"></script>
            </div>
        </div>
    </div>
</body>
</html>