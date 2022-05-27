$(document).ready(function (e) {
    $("#Materias").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/FuncMaterias.php");
    });
    $("#tutoria").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/signup_tutoria.php");
    });
    $("#fichasestudio").click(function (e) {
        $(".ContenidoPrincipal").attr("src", "Funcionalidades/ficha.php");
    });

});



$(document).ready(function (e) {
    $(".acordeon").find("h3").click(function (e) {
        $(".acordeon").find("div").css({
            'width': '100%',
            'max-height': '1000px',
            'padding': '10px',
            'transition':'all 0.1s ease-in'
        })
    })
});