let tab = document.querySelector(".tab-form");
let tabHeader = tab.querySelector(".tab-header");
let tabHeaderElements = tab.querySelectorAll(".tab-header > div");
let tabBody = tab.querySelector(".tab-body");
let tabBodyElements = tab.querySelectorAll(".tab-body > div");

for(let i=0;i<tabHeaderElements.length;i++){
    tabHeaderElements[i].addEventListener("click",function(){
        tabHeader.querySelector(".active").classList.remove("active");
        tabHeaderElements[i].classList.add("active");
        tabBody.querySelector(".active").classList.remove("active");
        tabBodyElements[i].classList.add("active");
    });
}

$(function(){
    $('.header-slider').slick({
        arrows:true,
        dotsClass:'header-dots',
        autoplay: 100
    });
});

document.querySelector("#show-login").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
});

$(function(){
    $("#phone").mask("+7(999) 999-99-99");
});

$(function(){
    $("#phone_login").mask("+7(999) 999-99-99");
});


let catalogMenu = document.getElementById("subMenu")

function toggleCatalog(){
    catalogMenu.classList.toggle("open-menu")
}


