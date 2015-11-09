<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Asociado a un Consentimiento
  </h1>
 <!-- 
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#"> Consentimiento</a></li>
   <li class="active"> Bebe Asociado </li>
  </ol>
 -->
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form id="formularioBebeasociado" role="form" method="POST"  >
        
        <div class="col-lg-6">
          <div class="form-group">
          <label for="nombre">Nombre y apellido de la mama</label>
          
            <input type="text" class="form-control" id="nombre" disabled value="<?php echo $unaDonante[0]->nombre, " ", $unaDonante[0]->apellido;?>">
          </div>
        </div>
        
        
        <div class="col-lg-6" style='display:none;'>
          <div class="form-group">
          <label for="nroBebeAsociado">Nro Bebe Asociado</label>
          
            <input type="text" class="form-control" id="nroDonante" name="idBebeAsociado"
            value="<?php echo $unbebeasociado[0]->idBebeAsociado ;?>">
          </div>
        </div>
        
        
     
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label> Nombre del Bebe </label>
          
          <input type="text" id="nombreba" class="form-control" value="<?php echo $unbebeasociado[0]->nombreBebeAsociado; ?>" disabled name="nombrebebea"/>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
          <div class="form-group">
            <label> Apellido del Bebe </label>
            <input type="text" id="apellidoba" class="form-control" value="<?php echo $unbebeasociado[0]->apellidoBebeAsociado; ?>" disabled name="apellidobebea"/>
          </div>
        </div>
         <div class="col-xs-6">
        <!-- text input -->
            <div class="form-group">
              <label> DNI del Bebe </label>
              <input type="text" id="dniba" class="form-control" value="<?php echo $unbebeasociado[0]->dniBebeAsociado; ?>" disabled name="dnibebea"/>
            </div>
       </div>
         <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                                 <input type="text" class="form-control" id="fnac" data-inputmask="'alias': 'dd/mm/yyyy'" 
                                 data-mask name="fecha" value="<?php echo $unbebeasociado[0]->fechaNacBebeAsociado; ?>" disabled />

                            </div>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Edad Gestacional </label>
                    <input type="text" id="edadgestba" class="form-control" 
                    value="<?php echo $unbebeasociado[0]->edadGestBebAsociado; ?>" disabled name="edadgestba"/>
                </div>
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Lugar de Nacimiento del Bebe </label>
                    <input type="text" id="lugarbebea" class="form-control"
                    value="<?php echo $unbebeasociado[0]->lugarNacBebeAsociado; ?>" disabled name="lugarbebea"/>
                </div>
            </div>
       </form>
      
      
    </div class="form-group content">
    <div>
    <div class="row-lg-12" style="float:right">
      <a class="btn btn-success btn-md" href="javascript:window.history.back();">Volver</a>
    </div>
    </div>
    <!--
    <div class="pull-right content">
        <div class="form-group">
          <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" id="guardarBebea" class="btn btn-success btn-md"> Guardar Bebe </button>
        </div>                  
    </div>
    -->
 </section><!-- /.content -->

</aside><!-- /.right-side -->