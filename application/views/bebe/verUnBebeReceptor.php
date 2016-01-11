<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Receptor
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#"> Gestión de Bebes </a></li>
   <li class="active"> Bebe Receptor </li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form id="formularioBebereceptor" role="form" method="POST"  >
         <div class="col-lg-3">
          <div class="form-group">
          <label for="nroBebeReceptor">Nro Bebe Receptor</label>
            <input type="text" class="form-control" id="nroDonante" name="idBebeReceptor"
            value="<?php echo $unBebeR[0]->idBebeReceptor ;?>" disabled>
          </div>
        </div>
        <div class="col-xs-3">
         <div class="form-group">
          <label> Nombre del Bebe </label>
          <input type="text" id="nombrebr" class="form-control" value="<?php echo $unBebeR[0]->nombreBebeReceptor; ?>" disabled name="nombrebr"/>
         </div>
        </div>
        <div class="col-xs-3">
          <div class="form-group">
            <label> Apellido del Bebe </label>
            <input type="text" id="apellidobr" class="form-control" value="<?php echo $unBebeR[0]->apellidoBebeReceptor; ?>" disabled name="apellidobr"/>
          </div>
        </div>
         <div class="col-xs-3">
            <div class="form-group">
              <label> DNI del Bebe </label>
              <input type="text" id="dnibr" class="form-control" value="<?php echo $unBebeR[0]->dniBebeReceptor; ?>" disabled name="dnibeber"/>
            </div>
        </div>
         <div class="col-xs-6">
               <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                         <span class="input-group-addon">
                            <span class="fa fa-calendar"></span>
                         </span>
                         <input type="text" class="form-control" id="fnac" data-inputmask="'alias': 'dd/mm/yyyy'" 
                         data-mask name="fecha" value="<?php echo $unBebeR[0]->fechaDeNac; ?>" disabled />
                    </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Lugar de Nacimiento del Bebe </label>
                    <input type="text" id="lugarbr" class="form-control"
                    value="<?php echo $unBebeR[0]->lugarNac; ?>" disabled name="lugarbr"/>
                </div>
            </div>
            <div class="col-xs-6">
            <div class="form-group">
                <label> Nombre de la Madre del Bebe </label>
                <input type="text" id="madreBr" class="form-control"
                value="<?php echo $unBebeR[0]->nombreMadre; ?>" disabled name="madreBr"/>
            </div>
            </div>
            <div class="col-xs-6">
            <div class="form-group">
                <label> Nombre del Padre del Bebe </label>
                <input type="text" id="padreBr" class="form-control"
                value="<?php echo $unBebeR[0]->nombrePadre; ?>" disabled name="padreBr"/>
            </div>
            </div>
            <div class="col-xs-6">
            <div class="form-group">
                <label> Direccion del Bebe </label>
                <input type="text" id="direcBr" class="form-control"
                value="<?php echo $unBebeR[0]->direccion; ?>" disabled name="direcBr"/>
            </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label> Edad Gestacional </label>
                    <input type="text" id="edadgestbr" class="form-control" 
                    value="<?php echo $unBebeR[0]->edadGestacional; ?>" disabled name="edadgestbr"/>
                </div>
            </div>
       </form>
    </div class="form-group content">
    <div>
    <div class="row-lg-12" style="float:right">
      <a class="btn btn-primary btn-md" href="<?php echo base_url();?>index.php/cbebe/view/verBebereceptor">Volver</a>
    </div>
    </div>
 </section>
</aside><!-- /.right-side -->