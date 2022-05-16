$(document).ready(function (e) {
    $('#materias').on('click',function()
    {
        $('.ContenidoPrincipal').attr('src','Funcionalidades/materia.php');
    });
});
function AbrirVentana() {
    $(".ventana").slideDown("slow");
}

function CerrarVentana() {
    $(".ventana").slideUp("fast");
}