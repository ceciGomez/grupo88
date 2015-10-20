<aside class="right-side">
<!-- section header -->
<section class="content-header">
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="#">Hoja de Ruta</a></li>
		<li class="active">Ver hoja de ruta por semana</li>
	</ol>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
	<div >
		<!-- este boton deberia ir a generar una nueva hoja de ruta, 
		pero para semana entera -->
		<a href="#" class="btn btn-success" role="button">
		Generar Hoja de Rutas para la semana
		</a>
	</div>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
	 
	 <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Fecha de Salida</th>
                              <th>Dia</th>
                              <th>Id HR</th>
                              <th>Fecha de Creacion</th>
                              <th>Zona</th>
                              <th>Ultima modif</th>
                              <th>Chofer</th>
                              <th>Auxiliar</th>
                              <th>Fecha Efectiva</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($hojasdeRuta as $value) :?>
                         <tr>
                            <td colspan="" rowspan="" headers=""><?php echo '' //$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value-> ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td>
                            <td colspan="" rowspan="" headers=""><?php echo ''//$value->?></td> 
                            <td colspan="" rowspan="" headers=""><?php echo ''?></td>
                            <td colspan="" rowspan="" headers="">
                              <a href="#"
                                class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="#"
                                  class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-pencil"></i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

</section>  <!-- fin section body -->

</aside><!-- /.right-side -->
