const tomilino_park = document.querySelector('#about_project_main #tomilino_park_img');
const tomilino_park_img_images = ["img/project_1_1.jpg", "img/project_1_2.jpg"];

let index = 1;

if (tomilino_park != null) {
    setInterval(() => {
        tomilino_park.src = tomilino_park_img_images[index];
        index++;
    
        if (index == tomilino_park_img_images.length) {
            index = 0;
        }
    }, 5000);
}

const pribrezhnyj_park = document.querySelector('#about_project_main #pribrezhnyj_park_img');
const pribrezhnyj_park_images = ["img/project_2_1.jpg", "img/project_2_2.jpg", "img/project_2_3.jpg"];

if (pribrezhnyj_park != null) {
    setInterval(() => {
        pribrezhnyj_park.src = pribrezhnyj_park_images[index];
        index++;
    
        if (index == pribrezhnyj_park_images.length) {
            index = 0;
        }
    }, 5000);
}

const novograd_pavlino = document.querySelector('#about_project_main #novograd_pavlino_img');
const novograd_pavlino_images = ["img/project_3_1.jpg", "img/project_3_2.jpg", "img/project_3_3.jpg"];

if (novograd_pavlino != null) {
    setInterval(() => {
        novograd_pavlino.src = novograd_pavlino_images[index];
        index++;
    
        if (index == novograd_pavlino_images.length) {
            index = 0;
        }
    }, 5000);
}