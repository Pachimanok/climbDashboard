<section id="contacto">
    <div class="container mt-7 py-4">
      <div class="row">
        <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
          <h3 class="text-center">Contactanos</h3>
        @php 
        
        if(isset($_GET['not'])){

            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
        <span class="alert-text"><strong>¡Muchas Gracias!</strong> Tu mensaje se envió correctamente. Te responderemos a la brevedad</span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>';
        };
        
        @endphp
          <form action="/mensajeWeb" method="POST" role="form" id="contact-form" autocomplete="off">
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Nombre y Apellido  </label>
                    <input name="nombre" class="form-control" aria-label="Nombre y Apellido" type="text" >
                  </div>
                </div>
                <div class="col-md-6 ps-2">
                  <div class="input-group input-group-dynamic">
                    <label class="form-label">Celular</label>
                    <input name="celular" type="phone" class="form-control" placeholder="" aria-label="Contacto" >
                  </div>
                </div>
              </div>
              <div class="mb-4">
                <div class="input-group input-group-dynamic">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" class="form-control">
                </div>
              </div>
              <div class="input-group mb-4 input-group-static">
                <label>Tu mensaje:</label>
                <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                <input type="hidden" name="pagina" value="{{Request::url()}}">
              </div>
              <div class="row">
                
                <div class="col-md-12">
                  <button type="submit" class="btn bg-gradient-dark w-100">Enviar Mensaje</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>