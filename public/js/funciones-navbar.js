$(document).ready(function() {
    /* Cargar vista usuarios*/
    $(".user").click(function(event) {
        $("#contenido").load("usuarios/principal.php");
        event.PreventDefault();
    });
    /* Btn salir*/
    $(".exit-sys").click(function() {
        if (confirm('Seguro/a en cerrar sesión'))
        {
            location.href ="../../index.php";
        }else{
            alert('Cierre de sesión cancelado...');
        }

        });
         /* btn eliminar usuario*/
    $(".exit-sys1").click(function (event) {
        if (confirm('Seguro/a en eliminar este usuario')) {
        $("#contenido").load("usuarios/principal.php");
        event.preventDefault();
        }
        else {
            alert('Eliminar usuario cancelado');
        }
    });
});