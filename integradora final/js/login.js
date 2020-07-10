function acceso(){
    nombre = document.getElementById("usuario").value;
    pass = document.getElementById("password").value;
    
    Vnombre = localStorage.getItem('nom');
    Vpass = localStorage.getItem('con'); 
    
    validacion = false;

    if(nombre === Vnombre  && pass === Vpass){
        validacion = true;
        return validacion;
    }   
}
acceso();