let modal = document.querySelector(".modal");

let btn = document.querySelectorAll(".open-btn");

for(let button of btn){
    button.addEventListener("click", ()=> {
        modal.style.display = "flex";
    });
}


let btnClose = document.querySelector("#btn-close");
btnClose.addEventListener("click", ()=> {
    modal.style.display = "none";
});

modal.addEventListener("click", ()=> {
    modal.style.display = "none";
});

//fin


let articles = document.querySelectorAll("a .open-btn");

for(let article of articles){
    article.addEventListener("click", persomodal());
}
 
function persomodal(){
    let titre = this.dataset.titre
    let image = this.dataset.image
    let descript = this.dataset.descript

    console.log(titre,image,descript);

    document.querySelector(".h2").innerText = titre
    document.querySelector(".image").src = image
    document.querySelector(".descript").innerText = descript
}

//modal contacter moi 

let modalf= document.querySelector("form");

let btnfO= document.querySelector(".btn-open");

btnfO.addEventListener("click", ()=> {
    modalf.style.display = "block";
});



let btnfC = document.querySelector(".btn-close");
btnfC.addEventListener("click", ()=> {
    modalf.style.display = "none";
});






