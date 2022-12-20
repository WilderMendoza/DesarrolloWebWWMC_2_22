function cargarContenido(url){
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("cab1").innerHTML=ajax.responseText;
        }
    }
    ajax.open("GET",url,true);
    ajax.send();
}
function enviarMensaje()
{
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;
        }
    }
    ajax.open("POST","registrar.php",true);
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    var nombre=document.getElementById("nombre").value;
    var email=document.getElementById("email").value;
    var mensaje=document.getElementById("mensaje").value;
    ajax.send("nombre="+nombre+"&email="+email+"&mensaje="+mensaje);
}
function enviarMensajeImagen()
{
    var ajax=new XMLHttpRequest();
    ajax.onreadystatechange=function(){
        if(ajax.readyState==4){
            document.getElementById("contenido").innerHTML=ajax.responseText;
        }
    }
    ajax.open("POST","registrar.php",true);
    ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    var nombre=document.getElementById("nombre").value;
    var email=document.getElementById("email").value;
    var mensaje=document.getElementById("mensaje").value;
    datos=new FormData();
    datos.append("nombre",nombre);
    datos.append("email",email);
    datos.append("mensaje",mensaje);
    datos.append("archivo",document.getElementById("archivo").files[0]);
    ajax.send(datos);
    
}
