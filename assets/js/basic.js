// alerta temporario
let temporaryAlert = document.querySelector('.alert.temporary');
setTimeout(function(){
    temporaryAlert.style.opacity = "0";
    setTimeout(()=>{
        temporaryAlert.style.visibility = "hidden"
    },900)
},2000)
