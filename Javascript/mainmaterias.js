$(buscar_datos());
function buscar_datos(consulta){
    $.ajax({
        url:'Funciones/buscarmaterias.php',
        type:'POST',
        dataType:'html',
        data:{consultamateria: consulta},
    })
    .done(function(respuesta)
    {
        $("#datospreguntas").html(respuesta);
    })
    .fail(function()
    {
        console.log("error");
    });

}