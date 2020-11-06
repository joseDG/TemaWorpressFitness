jQuery(document).ready( $ => {
    $('.site-header .menu-principal .menu').slicknav({
        label: '',
        appendTo: '.site-header'
    });

    //Agregando Slider
    if($('.listado-testimoniales').length > 0) {
        $('.listado-testimoniales').bxSlider({
            auto: true,
            mode: 'fade' ,
            controls: false 
        }); 
    }

    //Agregado mapa de leaftef
    const lat = document.querySelector('#lat').value;
    const lng = document.querySelector('#lng').value;
    const direccion = document.querySelector('#direccion').value;

    if(lat && lng && direccion){

        var map = L.map('mapa').setView([lat, lng], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([lat, lng]).addTo(map)
            .bindPopup(direccion)
            .openPopup();

    }

});

//Agregando posicion fija la barra fija del header al hacer scroll
window.onscroll = () => {
    const scroll = window.scrollY;

    const headerNav = document.querySelector('.barra-navegacion');
    const documentBody = document.querySelector('body');

    //Si la cantidad de scroll es mayor a, agregar una clase
    if(scroll > 300){
        headerNav.classList.add('fixed-top');
        documentBody.classList.add('ft-activo');
    }else{
        headerNav.classList.remove('fixed-top');
        documentBody.classList.remove('ft-activo');

    }
}
