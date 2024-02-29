window.addEventListener('scroll', function(){
    var button = document.querySelector(' .voltar-topo ');
    if (window.pageYOffset > 300){
        button.classList.add('show');
    }
    else{
        button.classList.remove('show');
    }
})

let btnMenu = document.getElementById('btn-menu')
let menu = document.getElementById('menu-mobile')
let overlay = document.getElementById('overlay-menu')

btnMenu.addEventListener('click', () =>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', () =>{
    menu.classList.remove('abrir-menu')
})

overlay.addEventListener('click', () =>{
    menu.classList.remove('abrir-menu')
})