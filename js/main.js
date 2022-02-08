ScrollReveal().reveal('.container-fluid');
ScrollReveal().reveal('.scroll_rev',{delay:500});

//afecta a las ventanas modales:
// ScrollReveal().reveal('.scroll_left',{
//     duration:1200,
//     origin:"left",
//     distance:"400px",
// });

//scroll-up:
document.getElementById("button-up").addEventListener("click",scrollUp);

function scrollUp(){

    var currentScroll=document.documentElement.scrollTop || document.body.scrollTop;
    
    if(currentScroll>0){
        window.requestAnimationFrame(scrollUp);
        window.scrollTo(0,currentScroll-(currentScroll/10));
        buttonUp.style.transform="scale(0)";

    }
}

//Show button:

buttonUp=document.getElementById("button-up");

window.onscroll=function(){

    var scroll=document.documentElement.scrollTop;
    if(scroll>500){
        buttonUp.style.transform="scale(1)";
    }else if(scroll<500){
        buttonUp.style.transform="scale(0)";
    }

}