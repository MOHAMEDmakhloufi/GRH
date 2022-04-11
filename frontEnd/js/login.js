document.f1.b1.onsubmit= function(even){
    even.preventDefault();
}
document.f1.b1.onclick= function(){
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