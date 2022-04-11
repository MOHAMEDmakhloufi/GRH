// Start function qui affiche les phone 
document.getElementById("phone").onclick= function(even){
    even.preventDefault();
    let p =document.querySelector(".phone");
    if(window.getComputedStyle(p).display=="none")
        p.style.display="block";
    else
        p.style.display="none";    
}
// End function qui affiche les phone 

//START FUNCTION QUI SELECTIONNER LES CHECKBOX CHECKEDS
function onchecked(self, bol=0){
    
    if(bol==0){
        
        if(self.getAttribute("class") =="card"){
            
            self.setAttribute("class", "card card-true");
        }else
            self.setAttribute("class", "card");
    }else
        self.setAttribute("class", "card");
}

//END ONCHECKED

//START FUNCTION OPENMODEL FOR UPDATE
function openModelForUpdate(e,self){
    
    openModel("update()");
    console.log(self.parentElement);
    setTimeout(()=>{onchecked(self.parentElement, 1);},5);
    

}
//END openModelForUpdate

//Start show reservation
function showreservation(){
    if(window.getComputedStyle(document.querySelector(".reservation")).display=="none"){

    document.querySelector(".utilisateur").style.display="none";
    document.querySelector(".reservation").style.display="block";
    document.querySelector(".categorie").style.display="none";
    document.querySelector(".chambre").style.display="none";
    }
}
// End 
//Start show chambre
function showchambre(){
    if(window.getComputedStyle(document.querySelector(".chambre")).display=="none"){

        document.querySelector(".utilisateur").style.display="none";
        document.querySelector(".reservation").style.display="none";
        document.querySelector(".categorie").style.display="none";
        document.querySelector(".chambre").style.display="block";
    }
}
// End 
//Start gerer les utilisateur
function showutilisateur(){

    if(window.getComputedStyle(document.querySelector(".utilisateur")).display=="none"){

        document.querySelector(".utilisateur").style.display="block";
        document.querySelector(".reservation").style.display="none";
        document.querySelector(".categorie").style.display="none";
        document.querySelector(".chambre").style.display="none";
    }
}

// End 
//Start gerer les categorie
function showcategorie(){

    if(window.getComputedStyle(document.querySelector(".categorie")).display=="none"){

        document.querySelector(".utilisateur").style.display="none";
        document.querySelector(".reservation").style.display="none";
        document.querySelector(".categorie").style.display="block";
        document.querySelector(".chambre").style.display="none";
    }
}

// End 

//START FUNCTION OPENMODEL FOR ADD
function openModel(methode){
    let sb= document.querySelector(".showblur");
    sb.style.display="block";
    
    let m= document.querySelector(".model-add");
    m.style.display="block";
    m.querySelector(".b-add").setAttribute("onclick",methode);
}
//END openModel

