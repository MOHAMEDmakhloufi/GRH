<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/compte.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- START SHOW BLUR -->
    <div class="showblur" onclick="closeModel()">

    </div>
    <!-- END SHOW BLUR -->
    <!-- START MODEL ADD -->
    <div class="model-add">
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
                    <li><a href="../index.html">Log Out</a></li>
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
                <li><button onclick="showreservation()" >RESERVATIONS</button></li>
                <li><button onclick="showchambre()" >CHAMBRES</button></li>
                <li><button onclick="showcategorie()">CATEGORIES</button></li>
                <li><button onclick="showutilisateur()">UTILISATEURS</button></li>
                
            </ul>
        </div>
        
        <div class="section">
            
            <div class="container">
                <!-- Start RESERVATION  -->
                <div class="reservation">
                    <button>DELETE</button>
                    <button class="b-add" onclick="openModel('add()')">AJOUTER</button> 
                    <input type="search" name="search" id="">
                    <div class="cards">
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdate(33,this)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdate(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdate(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdate(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdate(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        <div class="card" onclick="onchecked(this)">
                            <!-- <span><input type="checkbox" name="cbx" onclick="onchecked()"></span> -->
                            <span>categorie chabre </span>
                            <span>date debut</span>
                            <span>date fin</span>
                            <span>prix</span>
                            <span id="edit" onclick="openModelForUpdate(33)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        
                        
                    </div>
                </div>
                <!-- End RESERVATION  -->
                <!-- Start Chambre  -->
                <div class="chambre">
                    <button>DELETE</button>
                    <button class="b-add" onclick="openModel('add()')">AJOUTER</button> 
                    <button class="b-add" onclick="openModel('add()')">UPDATE</button> 
                    <input type="search" name="search" id="">
                    <div class="cards">
                        <div class="card" onclick="onchecked(this)">
                            <span>1 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>2 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>3 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>11 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>4 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>1 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>2 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>3 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>11 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>

                        <div class="card" onclick="onchecked(this)">
                            <span>4 </span>
                            <span><i class="fa-solid fa-bed"></i></span>
                            <span>type</span>
                        </div>
                    </div>
                    
                </div>
                <!-- End chambre -->
                <!-- Start categorie -->
                <div class="categorie">
                    <button>DELETE</button>
                    <button class="b-add" onclick="openModel('add()')">AJOUTER</button> 
                    <div class="cats">

                        <div class="cat">
                            <span>suite</span>
                            <span>500dt</span>
                            <span id="edit" onclick="openModelForUpdate(33,this)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>

                        <div class="cat">
                            <span>suite</span>
                            <span>500dt</span>
                            <span id="edit" onclick="openModelForUpdate(33,this)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>

                        <div class="cat">
                            <span>suite</span>
                            <span>500dt</span>
                            <span id="edit" onclick="openModelForUpdate(33,this)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                        
                        <div class="cat">
                            <span>suite</span>
                            <span>500dt</span>
                            <span id="edit" onclick="openModelForUpdate(33,this)" ><i class="fa-solid fa-pen-to-square"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End categorie -->
                <!-- Start utilisateur -->
                <div class="utilisateur">
                    <input type="search" name="search" id="">
                    <div class="cards">
                        <div class="card">
                            <span>username</span>
                            <span>password</span>
                            <span><button class="b-du">delete</button></span>
                            <span><button class="b-eu">edit</button></span>
                        </div>

                        <div class="card">
                            <span>username</span>
                            <span>password</span>
                            <span><button class="b-du">delete</button></span>
                            <span><button class="b-eu">edit</button></span>
                        </div>

                        <div class="card">
                            <span>username</span>
                            <span>password</span>
                            <span><button class="b-du">delete</button></span>
                            <span><button class="b-eu">edit</button></span>
                        </div>

                        <div class="card">
                            <span>username</span>
                            <span>password</span>
                            <span><button class="b-du">delete</button></span>
                            <span><button class="b-eu">edit</button></span>
                        </div>
                    </div>
                </div>
                <!-- End utilisateur -->
                <script src="../js/admin.js"></script>
            </div>
        </div>
    </div>
</body>
</html>