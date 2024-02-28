<div class="content" style="padding: 10%">
    <h1>¡Hola bella!</h1>
<br>
    <p>En SOPyFIVE te apreciamos y queremos que nos ayudes a crear la plataforma ideal para ti y otras mujeres con SOP.
        Solo te tomará un minuto responder algunas preguntas. Al hacerlo, entrarás en el sorteo de <strong>una consulta gratuita
        conmigo y uno de mis suplementos favoritos para el SOP. </strong> ¡Tu opinión es muy importante para este proyecto!
        ¡Gracias por tu colaboración! 🫶
    </p>
<br>
    <button class="btn" style="background-color:#7D525E" type="button" data-bs-toggle="modal"
        data-bs-target="#tooltipModal">Ver preguntas</button>
    <div class="modal fade" id="tooltipModal" tabindex="2" aria-labelledby="tooltipModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tooltipModalLabel">Encuesta</h5>
                </div>
                <div class="modal-body">

                    {{-- FORMULARIO ENCUESTA --}}
                    <livewire:component.encuesta-form>


                </div>
                <div class="modal-footer"><button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal"
                        style="background-color:#d32d2d">Cancelar</button></div>
            </div>
        </div>
    </div>



</div>
