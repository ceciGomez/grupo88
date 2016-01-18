<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url()?>assets/img/avatar5.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hola, Eric</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
                <span class="input-group-btn">
                    <button type='submit' name='Buscar' id='search-btn' 
                    class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?php echo base_url();?>index.php/page/view">
                    <i class="fa fa-home"></i> <span>Pagina Principal</span>
                </a>
            </li>
            <!-- Consentimiento y submenu -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Consentimiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <!-- Registrar consentimiento -->
                    <li><a href="<?php echo base_url();?>index.php/consentimiento/view/buscaconsentimiento"><i class="fa fa-angle-double-right">
                    </i>Registrar Consentimiento </a></li>
                    <!-- ver consentimientos consentimiento -->
                    <li><a href="<?php echo base_url();?>index.php/consentimiento/view/verConsentimientos"><i class="fa fa-angle-double-right">
                    </i>Ver Consentimientos Activos </a></li>
                    <li><a href="<?php echo base_url();?>index.php/consentimiento/view/verTodosConsentimientos"><i class="fa fa-angle-double-right">
                    </i>Ver Todos los Consentimientos</a></li>
                    <!--Serologia -->
                    <li><a href="<?php echo base_url();?>index.php/cserologia/view/verSerologias"><i class="fa fa-angle-double-right">
                    </i>Ver Serologías </a></li>
                    <!--Registrar donantes -->
                    <li><a href="<?php echo base_url();?>index.php/cdonante/view/verDonantes"><i class="fa fa-angle-double-right">
                    </i> Ver Donantes</a></li>
                    <li><a href="<?php echo base_url();?>index.php/cbebe/view/verBebeasociado"><i class="fa fa-angle-double-right">
                    </i> Ver Bebes asociados</a></li>
                    <li><a href="<?php echo base_url();?>index.php/centrosRec/view/verCentrosR"><i class="fa fa-angle-double-right">
                    </i> Centros de Recolección</a></li>
                </ul>
            </li>
             <!-- Seguimiento y menu   --> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Seguimientos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBa1"><i class="fa fa-angle-double-right">
                    </i>Seguimiento de Bebe Asociado </a></li>
                    <li><a href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBR"><i class="fa fa-angle-double-right">
                    </i>Seguimiento de Bebe Receptor </a></li>
                    <!--Ver seguimientos, supongo mostrar ambos segimietos en una sola vista -->
                   <!-- <li><a href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBa"><i class="fa fa-angle-double-right">
                    </i> Ver seguimientos </a></li>-->
                </ul>
            </li>
            
                <!-- Pasteurizacion   --> 
                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-random"></i> <span>Pasteurización</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cpasteurizacion/view/nuevaPasteurizacion"><i class="fa fa-angle-double-right">
                    </i>Registrar Nueva Pasteurización </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i>Administrar Biberones </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Cultivo</a></li>
                   
                </ul>
            </li><!-- fin pasteurizacion  -->
            <!-- Hoja de Ruta y menu   --> 
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-map-marker"></i> <span>Hoja de Ruta</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/chojaderuta/view/verhrSemanal">
                        <i class="fa fa-angle-double-right">
                    </i> Ver Hoja de Ruta por Semana </a></li>
                    <li><a href="<?php echo base_url();?>index.php/chojaderuta/view/verTodashr
                        "><i class="fa fa-angle-double-right">
                    </i> Ver Todas las Hojas de Ruta </a></li>
                    <li><a href="<?php echo base_url();?>index.php/chojaderuta/view/buscarHr"><i class="fa fa-angle-double-right">
                    </i> Registrar regreso de Hoja de Ruta </a></li>
                    
                </ul>          
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-bitbucket"></i> <span>Frascos</span>
                    <i class="fa fa-angle-left pull-right"></i><i class=""></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cfrascos/view/verFrascos"><i class="fa fa-angle-double-right">
                    </i> Ver Frascos</a></li>
                    <!-- <li><a href="<?php echo base_url();?>index.php/cfrascos/view/ingresoFrascos"><i class="fa fa-angle-double-right">
                    </i> Ingreso de Frascos </a></li>
                   <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Acidez y Hematocritos</a></li>-->
                </ul>
            <!-- Fraccionamiento -->
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-stack-overflow"></i> <span>Fraccionamiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cfraccionamiento/view/registrarFrac_sel"><i class="fa fa-angle-double-right">
                    </i> Registrar Fraccionamiento </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Consumo de Bebe Receptor</a></li>
                    <!--Administrar bebe receptores -->
                    <li><a href="<?php echo base_url();?>index.php/cbebe/view/bebeReceptor"><i class="fa fa-angle-double-right">
                    </i> Administrar Bebés Receptores</a></li>
                    
                    <li><a href="<?php echo base_url(); ?>index.php/cpmedica/view/altaPmedica"><i class="fa fa-angle-double-right">
                    </i> Ingresar Prescripción Médica</a></li>
                </ul>
            </li>
            <!-- fin fraccionamiento -->
            <!-- INSUMOS -->
             <li class="active">
               <a href="<?php echo base_url();?>index.php/cinsumos/view/verInsumos">
                    <i class="fa fa-book"></i> <span>Insumos</span>
                   
                </a>
            </li>
            <!--fin de insumos -->
            <!--Reportes -->
            <li class="active">
                <a href="<?php echo base_url();?>index.php/creportes/view/repor_donante">
                    <i class="fa fa-file-text-o"></i> <span>Informes</span>
                </a>
            </li>
            <!--fin reportes -->
             <!-- Zona  y localidades  --> 
                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-random"></i> <span>Administrar de Zonas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/czona/view/verTodasLasZonas"><i class="fa fa-angle-double-right">
                    </i>Ver Todas las Zonas </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i>Ver todas las Localidades </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Ver todas las Provincias</a></li>
                   
                </ul>
            </li><!-- fin zona  --> 
             <!-- Medios  --> 
                 <li class="active">
                <a href="<?php echo base_url();?>index.php/cmedios/view/verMedios">
                    <i class="fa fa-users"></i> <span>Administrar de Medios</span>
                    
                </a>
                
            </li><!-- fin medios  --> 
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>