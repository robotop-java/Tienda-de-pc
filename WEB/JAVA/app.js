let imagenes = [
    {
    "url": "Css/Productos/Anuncio 1.jpg",
    "nombre": "Monitores",
    "descripcion": "Los nuevos monitores que llegaron a la tienda, con una calidad de imagen increible y un diseño elegante.",
    },
    {
        "url": "Css/Productos/Anuncio 3.jpg",
        "nombre": "Los mejores perefericos",
        "descripcion": "Los nuevos perifericos que llegaron a la tienda, con un rendimiento superior y una compatibilidad garantizada.",
    },
    {
        "url": "Css/Productos/Anuncio 2.jpg",
        "nombre": "Las mejores RAM",
        "descripcion": "Las nuevas ram llegadas a la tienda, con un rendimiento superior y una compatibilidad garantizada.",
    }
]

let atras = document.getElementById("atras");
let adelante = document.getElementById("adelante");
let img = document.getElementById("img");
let texto = document.getElementById("texto");
let puntos = document.getElementById("puntos");
let actual = 0;
posicionCarrusel()

atras.addEventListener("click", function(){
actual -= 1
if (actual == -1){
 actual = imagenes.length - 1;

}
img.innerHTML = `<img src="${imagenes[actual].url}" alt="imagen 1" class="img" loading="lazy">`
texto.innerHTML = `
 <h3>${imagenes[actual].nombre}</h3>
 <p>${imagenes[actual].descripcion}</p>
`
posicionCarrusel()
});

adelante.addEventListener("click", function(){
actual += 1
if (actual == imagenes.length){
 actual = 0

}
img.innerHTML = `<img src="${imagenes[actual].url}" alt="imagen 1" class="img" loading="lazy">`
texto.innerHTML = `
 <h3>${imagenes[actual].nombre}</h3>
 <p>${imagenes[actual].descripcion}</p>
                   `
 posicionCarrusel()
});

function posicionCarrusel(){
    puntos.innerHTML = "";
 for (var i = 0; i <imagenes.length; i++){
    if( i == actual){
        puntos.innerHTML += '<p class="bold">.</p>'

    }
    else{
        puntos.innerHTML += '<p>.</p>'
    }
 }

}