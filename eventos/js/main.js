let nav = document.body.getElementsByClassName('top-nav')[0];
let modal = document.body.getElementsByClassName('modal')[0];

function openMobileMenu(){
    nav.style.left="0";
    modal.style.display="block";
}//Fin funtion

function closeMobileMenu(){
    nav.style.left="-24em";
    modal.style.display="none";
}//Fin funtion

window.onclick = function(e){
    if(e.target == modal){
        modal.style.display="none";
        nav.style.left="-24em";
    }
}
