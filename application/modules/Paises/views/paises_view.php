
<section>
      <!-- Titulo -->
    <div class="container" >
      <div class="row mt-3">
        <div class="col-md-6">
          <h2><small>Selecciona un país según su sigla ISO</small></h2>
        </div>
      </div>
	  <!-- Formulario de paises -->
    <div class="row  m-4" >
      <form class="form-inline" id="formPaises" action="<?php echo base_url('paises/paises/getPais');?>" method="post">
        <!-- Select de Siglas -->
        <div class="col-md-6 mt-2">
              <div class="form-group">
                <label for="pais" class="card-title h5 mb-1">Siglas</label>
                <select class="form-control" id="pais" name="Pais">               
                <option disabled selected>Seleccione...</option>
                <?php if(count($paises) > 0): foreach ($paises as $pais):?>
                    <option value="<?php echo $pais->id?>" data-nombre="<?php echo $pais->nombre?>"><?php echo $pais->sigla?></option>
                <?php endforeach; endif;?>
                </select>
              </div>
        </div>
        <!-- Muestra la informacin seleccinada y cargada -->
        <div class="col-md-6" id="card" hidden>
        	<div class="card">
            <div class="card-body">
              <h3 id="showPais"></h3>
            </div>
        	</div>
        </div> 
      </form>
    </div>
</section>