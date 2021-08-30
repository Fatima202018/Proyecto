$(document).ready(function() {
    /* Cargar vista de usuarios */
    $(".user").click(function(event) {
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
    });
    /*Btn Salir */
    $(".exit-sys").click(function() {
       if (confirm('Seguro/a de cerrar Sesion'))
       {
           location.href = "../../index.php";
       } else {
           alert('Cierre de Sesion Cancelado...');
       }
    });
});