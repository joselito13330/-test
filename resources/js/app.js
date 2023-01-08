require('./bootstrap');

require('alpinejs');

const menuResponsive = document.querySelector('.toggle-menu');
const iconeToggle = document.querySelector('.icone-toggle');
iconeToggle.addEventListener('click', () => {
   menuResponsive.classList.toggle('hidden');
});

$("document").ready(function(){
    setTimeout(function(){
       $("#alert").remove();
    }, 3000 ); // 3 secs
});


