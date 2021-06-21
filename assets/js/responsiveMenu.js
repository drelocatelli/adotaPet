window.onload = function(){
    resizable();
}

window.onresize = function(){
    resizable();
}

function resizable(){
    /*-----------   Variaveis   ---------- */
    var size = window.outerWidth;

    var navbar = document.querySelector('ul#menu')
    var responsive = document.querySelector('.responsive')

    var btn = document.querySelector('nav.navbar .toggled .toggle')
    var btn2 =  document.querySelector('nav.navbar .toggled .close')

    /*-----------   Funções   ---------- */

    function openMenu() {
        navbar.style = "display:block!important";
        responsive.style = "display:none!important";
    }

    function closeMenu() {
        navbar.style = "display:none!important";
        btn.style = "display:block!important";
        responsive.style = "display:block!important";
        btn2.style = "display:none!important";
    }
    

    /*-----------   Abre/Fecha e botões  ---------- */
    if(size > 1798){
        openMenu();
    }else{
       closeMenu();
    }

    btn.onclick = function () {
        navbar.style = "display:block!important";
        btn.style = "display:none!important"
        btn2.style = "display:block!important"
    }

    btn2.onclick = function () {
        navbar.style = "display:none!important";
        btn.style = "display:block!important";
        btn2.style = "display:none!important";
    }

    
}