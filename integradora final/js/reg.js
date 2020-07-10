function dato(){
    correo = document.getElementById("email").value;
    nombre = document.getElementById("usuario").value;
    contraseña = document.getElementById("pass").value;
    Ccontraseña = document.getElementById("Cpass").value;

    expresion = /\w + @ + \w + \. + [a-z]/;

    localStorage.setItem("cor",correo);
    localStorage.setItem("nom",nombre);
    localStorage.setItem("con",contraseña);
    localStorage.setItem("Cco",Ccontraseña);
 
    if (nombre ==="" || correo ===""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    else if (expresion.test(correo)){
        alert("el correo no es valido");
        return false;
    }
    else if(contraseña.length>15 || contraseña.length<4 && Ccontraseña.length>15 || Ccontraseña.length<4){
        alert("La contraseña no coincide o es muy corta");
        return false;
    }
    else if(nombre.length > 30){
        alert("el nombre es muy largo ");
        return false;
    }
}
 function datos(){
    var nomb = localStorage.getItem("nom");
    var corr = localStorage.getItem("cor");
    var cont = localStorage.getItem("con");
    var Ccon = localStorage.getItem("Cco");

}
function validarCredenciales(Pnombre, Ppass){
    var nombres = localStorage.getItem("nom");
    var password = localStorage.getItem("con")

    acceso = false;
    
    if(Pnombre == nombres && Ppass === password){
        acceso = true;
        return acceso;
    }
}
