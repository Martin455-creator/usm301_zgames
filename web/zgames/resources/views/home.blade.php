@extends("layouts.master")


@section("contenido")
<div class="row mt-5">
    <div class="col-12 col-md-6 col-lg-5 mx-auto">
         <div class="card">
           <div class="card-header bg-primary text-white">
              <span>Resgistrar lectura</span>
           </div>
           <div class="card-body">
                <div class="mb-3">
                    <label for="fecha-txt" class="form-label">Fecha</label>
                    <input type="date" id="fecha-txt" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="hora-select" class="form-label">Hora</label>
                    <input type="time" id="hora-txt" class="form-control">
                      
                </div>
                    <div class="mb-3">
                        <label for="medidor-select" class="form-label" >Medidor</label>
                        <select class="form-select" id="medidor-select">
                      
                    </div>
                     <div class="mb-3">
                     <label for="direccion-txt">Direccion</label>
                      <input type="text" class="form-control" id="direccion-txt">
                     </div>
                    
                    <div class="mb-3">
                        <label for="valor-txt" class="form-label">Valor</label>
                          <input type="number" id="valor-txt" class=form-control>
                    </div> 
                    <div class="mb-3">
                        <label for="tipo-select" class="tipo-label">Tipo de medida</label>
                        <select class="form-select" id="tipo-select">
                        
                        

                        </select>
                  </div> 


           </div>
           <div class="card-footer d-grid gap-1">
             <button id="registrar-btn" class="btn btn-info ">Registrar</button>
           </div>
         </div>
     </div>
</div>




@endsection

