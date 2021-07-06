<!-- Feedback modal-->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Buscar Peludo</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <form method="GET" action="./../BuscarPeludo/index.php">
                        <div class="form-floating mb-4">
                            <input class="form-control" id="inputName" type="text" placeholder="ingresa el codigo" />
                            <label for="inputName">Codigo</label>
                        </div>
                        <div class="d-grid"><button class="btn btn-primary rounded-pill py-3"
                                type="submit">Buscar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>