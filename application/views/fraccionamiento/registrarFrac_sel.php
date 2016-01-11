

<!--Registrar Fraccionamiento - Seleccion
   Se elige la forma de seleccion de biberon para proceder 
   al fraccionamiento
    -->
<aside class="right-side">
   <section class="content-header col-md-12">
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Fraccionamiento</a></li>
         <li class="active">Registrar Fraccionamiento </li>
      </ol>
      <h1>Buscar Prescripciones</h1>
   </section>
   <!-- fin section header -->
   <section class="content col-md-12">
      <form id="formBuscarPmedicas" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
      action="<?php echo base_url();?>index.php/cfraccionamiento/registrarFrac_sel" >
         <div class="col-md-12" >
            <!-- text input -->
            <div class="form-group" >
               <label>Tipo de Leche</label>
               <div >
                  <select name="tipoLeche" class="form-control" >
                     <option value="Calostro">Calostro</option>
                     <option value="Transicion">De Transicion</option>
                     <option value="Madura">Madura</option>
                  </select>
               </div>
            </div>
         </div>
         <div class="pull-right content">
            <div class="form-group">
               <button type="button"  aria-hidden="true" id="buscarPmedica" class="btn btn-success btn-md">Buscar Biberones</button>
            </div>
         </div>
      </form>
   </section>
</aside>
<script src="<?php echo base_url();?>assets/internals/js/fraccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>


