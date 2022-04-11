//START FUNCTION OPENMODEL FOR ADD
function openModelReservation(methode){
    let sb= document.querySelector(".showblur");
    sb.style.display="block";
    
    let m= document.querySelector(".model-addReservation");
    m.style.display="block";
    m.querySelector(".b-add").setAttribute("onclick",methode);
}
//END openModel

//START FUNCTION OPENMODEL FOR UPDATE
function openModelForUpdateReservation(e,self){
    
    openModelReservation("update()");
    console.log(self.parentElement);
    setTimeout(()=>{onchecked(self.parentElement, 1);},5);
    

}
//END openModelForUpdate

//START FUNCTION closeMODEL FOR ADD
function closeModelReservation(){
    let b_reset = document.querySelector(".b-reset");
    b_reset.click();
    
    let m= document.querySelector(".model-addReservation");
    m.style.display="none";

    let sb= document.querySelector(".showblur");
    sb.style.display="none";
 
}
//END closeModel