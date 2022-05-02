function AgregarDivs(Pregunta,ArrayRespuestas,idmateria)
{
    $Contenido =
        `<div id="${idmateria}" class="contentClass">
        <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            ${Pregunta}
        </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <h3>Hola</h3>
            </div>
        </div>
    </div>
    </div>
    `;

    $("#tabsDiv").prepend($Contenido);
}