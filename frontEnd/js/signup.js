document.f1.b1.onsubmit= function(even){
    even.preventDefault();
}

document.f1.b1.onclick=function(){
   
    
    document.f1.style.display="none";
    document.querySelector(".fa-1").style.background= "#ff7c46";
    document.getElementsByTagName("hr")[0].style.border= "1px solid #ff7c46";
    document.f2.style.display="block";
}

document.f2.b2.onsubmit= function(even){
    even.preventDefault();
}
document.f2.b2.onclick=function(){
    
    let a= document.createElement("a");
    a.setAttribute("href","user.html");
    
    a.click();
}
function cacher(id){
    document.getElementById(id).focus();
}
function modifierDesign(self,  id){
    let pl= document.getElementById(id);
    if(self.value != null && self.value !=""){
        pl.setAttribute("class", "placeholder isNotEmpty")
    }else{
        pl.setAttribute("class", "placeholder")
    }

}