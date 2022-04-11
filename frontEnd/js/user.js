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


//Start show reservation
function showreservation(){
    if(window.getComputedStyle(document.querySelector(".reservation")).display=="none"){

    document.querySelector(".moncompte").style.display="none";
    document.querySelector(".reservation").style.display="block";
    document.querySelector(".historique").style.display="none";
    
    }
}
// End 
//Start show historique d'un client
function showhistorique(){
    if(window.getComputedStyle(document.querySelector(".historique")).display=="none"){

    document.querySelector(".moncompte").style.display="none";
    document.querySelector(".reservation").style.display="none";
    document.querySelector(".historique").style.display="block";
    }
}
// End 
//Start gerer les compte
function showmoncompte(){

    if(window.getComputedStyle(document.querySelector(".moncompte")).display=="none"){

        document.querySelector(".moncompte").style.display="block";
        document.querySelector(".reservation").style.display="none";
        document.querySelector(".historique").style.display="none";
    }
}

    //Start  click a update client
    function showUpdateclient(self){
        
        if(window.getComputedStyle(document.f1).display=="none"){
            document.f1.style.display="block";
            self.style.opacity="1";
            document.f2.style.display="none";
            document.getElementById("upcompte").style.opacity="0.5";
        }
            
        else{
            document.f1.style.display="none";  
            self.style.opacity="0.5";
        }
            
    }
    // End 
    //Start  click a update compte
    function showUpdatecompte(self){
        
        if(window.getComputedStyle(document.f2).display=="none"){
            self.style.opacity="1";
            document.f2.style.display="block";
            document.f1.style.display="none";
        
            document.getElementById("upclient").style.opacity="0.5";
        } else{
            self.style.opacity="0.5";
            document.f2.style.display="none";
        }
            
    }
    // End 
// End 
