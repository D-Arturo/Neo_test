/**
 * TODO: Desarrollar el código del slider
 */

// Tuve problemas con el elemento insertAdjacentElement a la hora de cargar el contenido mediante el fetch, por lo que he dejado el código comentado y he hardcodeado la data del slider.

// let slide = document.querySelector('#slider');

// function getData() {
//      fetch('./api/slides.json')
//      .then(res => res.json())
//      .then(info => LoadData(info.data))
// }
 
// async function LoadData(datos) {
    
//      for await( let value of datos){
//         slide.innerHTML += `
 
//         <div class="slider__section">
//         <img src="${value.bg_image}" alt="" class="slider__img">
//         <div class="slider__content">
//             <h2 class="slider__title">${value.title}</h2>
//             <a href="${value.button_link}" class="slider__btn button">${value.button_text}</a>
//         </div>
//         </div>  
 
//         `
//     }
// }
 
// getData();

const slider = document.querySelector('#slider');
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length-1];

const btnLeft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

slider.insertAdjacentElement('afterBegin', sliderSectionLast)

function Next() {
    let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('beforeend', sliderSectionFirst)
        slider.style.marginLeft = "-100%";
    }, 500);
}

function Prev() {
    let sliderSection = document.querySelectorAll(".slider__section");
    let sliderSectionLast = sliderSection[sliderSection.length-1];
    slider.style.marginLeft = "0%";
    slider.style.transition = "all 0.5s";
    setTimeout(function(){
        slider.style.transition = "none";
        slider.insertAdjacentElement('afterbegin', sliderSectionLast)
        slider.style.marginLeft = "-100%";
    }, 500);
}

btnRight.addEventListener('click', function() {
    Next();
});

btnLeft.addEventListener('click', function() {
    Prev();
});

setInterval(function(){
    Next();
}, 5000 );

/**
 * TODO: Desarrollar el código para cargar productos por Ajax
 */
 
