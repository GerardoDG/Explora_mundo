var tarjetas_carrucel = document.querySelectorAll('#img-carrucel');
var textos_descriptivos = document.querySelectorAll('#texto-descriptivo');
var imagenes_carrucel = document.querySelectorAll('#imagen-carrucel');

tarjetas_carrucel.forEach(function(elemento){
    elemento.addEventListener('mouseover', escribirenconsola);
});
tarjetas_carrucel.forEach(function(elemento){
    elemento.addEventListener('mouseout', escribirenconsola2);
});
 imagenes_carrucel.forEach(function(elemento){
    elemento.addEventListener('load', escribirenconsola3);
});
 imagenes_carrucel.forEach(function(elemento){
    elemento.addEventListener('click', escribirenconsola4);
});

// agranda el tamaño de la imagen cuando se pasa el mouse por encima
function escribirenconsola(){
    this.style.width = '800px';
    this.style.height = '400px';
}
// disminuye el tamaño de la imagen cuando se quita el mouse
function escribirenconsola2(){
    this.style.width = '400px';
    this.style.height = '200px';
}
// oculta los textos descriptivos
function escribirenconsola3(){
 textos_descriptivos.forEach(function(elemento){
        elemento.style.display = 'none';
    });
}
// muestra el texto descriptivo de la imagen seleccionada y oculta los demas
function escribirenconsola4(){
 textos_descriptivos.forEach(function(elemento){
        elemento.style.display = 'none';
    });
    this.nextElementSibling.style.display = 'block';
}