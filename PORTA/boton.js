const botton = document.querySelector("#switch");//*QUIERO HACEDER AL BOTTON CON EL ID SWITCH

//*AGREGAR O ELIMINAR CLASE
//*Cambiar la clase para los modos claro o oscuro
botton.addEventListener("click",()=>{
document.body.classList.toggle("oscuro");
botton.classList.toggle("active");
})
