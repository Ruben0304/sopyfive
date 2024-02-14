<div class="content">
    <div class="mt-4">
        <div class="row g-4">
            <div class="col-12 col-xl-10 order-1 order-xl-0">
                <div class="mb-9">
                    <div class="card shadow-none border border-300 my-4" data-component-card="data-component-card">
                        <div class="card-header p-4 border-bottom border-300 bg-soft">
                            <div class="row g-3 justify-content-between align-items-center">
                                <div class="col-12 col-md">
                                    <h4 class="text-900 mb-0" data-anchor="data-anchor">Nuevo artículo</h4>
                                </div>

                            </div>
                        </div>
                        <div class="card-body p-0">

                            <div class="p-4 code-to-copy">
                                <form wire:submit="create">


                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-name">Título</label>
                                        <input class="form-control" id="basic-form-name" type="text"
                                               placeholder="Titulo" wire:model="form.title"/>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-gender">Comunidad</label>
                                        <select class="form-select" id="basic-form-gender"
                                                aria-label="Default select example" wire:model="form.comunity">
                                            <option selected value="">-- Selecciona una comunidad --</option>
                                            @foreach($comunities as $c)
                                                <option value="{{$c->id}}">{{$c->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Imagen</label>
                                        <input class="form-control" type="file" wire:model="form.photo"/>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="basic-form-textarea">Descripción</label>
                                        <textarea class="form-control" id="basic-form-textarea" rows="20"
                                                  placeholder="Descripcion" wire:model="form.content"></textarea>
                                    </div>
                                    @foreach ($errors->all() as $error)
                                        <span class="text-danger">{{ $error }}</span>
                                        <br><!-- Mostrar el mensaje de error -->
                                    @endforeach
                                    <button class="btn btn-primary" type="submit">Crear</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
        <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert"
             aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body p-3"></div>
                <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                        aria-label="Close"></button>
            </div>
        </div>
    </div>
    <footer class="footer position-absolute">
        <div class="row g-0 justify-content-between align-items-center h-100">
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 mt-2 mt-sm-0 text-900">Thank you for creating with Phoenix<span
                        class="d-none d-sm-inline-block"></span><span class="d-none d-sm-inline-block mx-1">|</span><br
                        class="d-sm-none"/>2023 &copy;<a class="mx-1" href="https://themewagon.com/">Themewagon</a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.13.0</p>
            </div>
        </div>
    </footer>
</div>
