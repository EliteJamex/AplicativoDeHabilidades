$(document).ready(function (e) {
    $("#Materias").click(function (e) { 
        $(".ContenidoPrincipal").attr("src","Funcionalidades/FuncMaterias.php");
    });
    $("#Tutoria").click(function (e) {
        $(".ContenidoPrincipal").attr("src","Funcionalidades/signup_tutoria.php");
    });
});