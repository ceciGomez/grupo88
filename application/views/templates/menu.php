<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url()?>assets/img/logo.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hola, 
                    <?php 
                     echo $this->session->userdata('nombreUs');
                     echo ' ';
                     
                     ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?php echo base_url();?>index.php/page/view">
                    <i class="fa fa-home"></i> <span>Pagina Principal</span>
                </a>
            </li>
            <!-- Consentimiento y submenu -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i><span>Consentimientos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <!-- Registrar consentimiento -->
                    <li><a href="<?php echo base_url();?>index.php/consentimiento/view/buscaconsentimiento"><i class="fa fa-angle-double-right">
                    </i>Nuevo Consentimiento </a></li>
                    <!-- ver consentimientos consentimiento -->
                    <li><a href="<?php echo base_url();?>index.php/consentimiento/view/verConsentimientos"><i class="fa fa-angle-double-right">
                    </i>Consentimientos Activos </a></li>
                    <li><a href="<?php echo base_url();?>index.php/consentimiento/view/verTodosConsentimientos"><i class="fa fa-angle-double-right">
                    </i>Todos los Consentimientos</a></li>
                </ul>
            </li>
             <!-- Donantes   --> 
            <li class="active">
                <a href="<?php echo base_url();?>index.php/cdonante/view/verDonantes">
                    <i class="fa fa-female"></i></i> <span>Donantes</span>
                  <!--  <i class="fa fa-angle-left pull-right"></i>--> 
                </a>
            </li>
             <!-- Serologia   --> 
            <li class="active">
                <a href="<?php echo base_url();?>index.php/cserologia/view/verSerologias">
                    <i class="fa fa-tint"></i> <span>Serologias</span>
                 <!--    <i class="fa fa-angle-left pull-right"></i> --> 
                </a>
            </li>
            <!-- Bebes   --> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-male"></i><span>Bebés</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cbebe/view/verBebeasociado"><i class="fa fa-angle-double-right">
                    </i> Bebe Asociado </a></li>
                    <li><a href="<?php echo base_url();?>index.php/cbebe/view/verBebereceptor"><i class="fa fa-angle-double-right">
                    </i> Bebe Receptor </a></li>
                </ul>
            </li>
             <!-- Seguimiento y menu   --> 
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text-o"></i> <span>Seguimientos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBa1"><i class="fa fa-angle-double-right">
                    </i> Bebe Asociado </a></li>
                    <li><a href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBr1"><i class="fa fa-angle-double-right">
                    </i> Bebe Receptor </a></li>
                </ul>
            </li>
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
                    </i> Ver Frascos Disponibles</a></li>
                    <li><a href="<?php echo base_url();?>index.php/cfrascos/view/verFrascosPasteurizados"><i class="fa fa-angle-double-right">
                    </i> Ver Frascos Pasteurizados </a></li>
                  <!--  <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Acidez y Hematocritos</a></li>-->
                </ul>
                <!-- Pasteurizacion   --> 
                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-random"></i> <span>Pasteurización</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cpasteurizacion/view/inicioPasteurizacion"><i class="fa fa-angle-double-right">
                    </i>Registrar Nueva Pasteurización </a></li>
                    <li><a href="<?php echo base_url();?>index.php/cpasteurizacion/view/verPasteurizaciones"><i class="fa fa-angle-double-right">
                    </i>Ver Pasteurizaciones </a></li>
                   
                   
                </ul>
            </li><!-- fin pasteurizacion  -->
            <!-- Biberones   --> 
                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-random"></i> <span>Biberones</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cbiberon/view/administrarBiberones"><i class="fa fa-angle-double-right">
                    </i>Administrar Biberones </a></li>
                    
                </ul>
            </li><!-- fin Biberones  -->
            <!-- Prescripciones Medicas -->
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-list-alt"></i> <span>Prescripciones</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="<?php echo base_url(); ?>index.php/cpmedica/view/altaPmedica"><i class="fa fa-angle-double-right">
                    </i> Nueva Prescripción</a></li>
                    <li><a href="<?php echo base_url();?>index.php/cpmedica/view/verTodasLasPmedicas"><i class="fa fa-angle-double-right">
                    </i>Todas las Prescripciones</a></li>


                </ul>
            </li>
            <!-- fin Prescripciones Medicas  -->
            <!-- Fraccionamiento -->
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-stack-overflow"></i> <span>Fraccionamiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/cfraccionamiento/view/registrarFrac_sel"><i class="fa fa-angle-double-right">
                    </i>Nuevo Fraccionamiento </a></li>
                    <li><a href="<?php echo base_url();?>index.php/cfraccionamiento/view/verTodosLosFraccionamientos"><i class="fa fa-angle-double-right">
                    </i>Fraccionamientos</a></li>
                    <li><a href="<?php echo base_url();?>index.php/cfraccionamiento/view/registrarConsumoBr"><i class="fa fa-angle-double-right">
                    </i>Nuevos Consumos</a></li>
                </ul>
            </li>
            <!-- fin fraccionamiento -->
             <!-- Centros de Recolección   --> 
            <li class="active">
                <a href="<?php echo base_url();?>index.php/centrosRec/view/verCentrosR">
                    <i class="fa fa-hospital-o"></i><span>Centros de Recolección</span>
                <!--    <i class="fa fa-angle-left pull-right"></i>--> 
                </a>
            </li>            
             <!-- Zona  y localidades  --> 
                 <li class="treeview">
                <a href="#">
                   <i class="fa fa-flag-o"></i> <span>Administrar Zonas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/czona/view/verTodasLasZonas"><i class="fa fa-angle-double-right">
                    </i>Todas las Zonas </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                   
                </ul>
            </li><!-- fin zona  --> 
             <!-- Medios  --> 
                 <li class="active">
                <a href="<?php echo base_url();?>index.php/cmedios/view/verMedios">
                    <i class="fa fa-users"></i> <span>Administrar Medios</span>
                </a>
                
            </li><!-- fin medios  --> 
            <!-- INSUMOS -->
             <li class="active">
               <a href="<?php echo base_url();?>index.php/cinsumos/view/verInsumos">
                    <i class="fa fa-filter"></i> <span>Insumos</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-text"></i><span>Informes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/Creportes/view/repor_donante"><i class="fa fa-angle-double-right">
                    </i> Reporte Donantes </a></li>
                    <li><a href="<?php echo base_url();?>index.php/Creportes/view/repor_consentimiento"><i class="fa fa-angle-double-right">
                    </i> Reporte Consentimientos </a></li>
                    <li><a href="<?php echo base_url();?>index.php/Creportes/view/repor_pasteurizacion"><i class="fa fa-angle-double-right">
                    </i> Reporte de Leche Pasteurizada</a></li>
                    <li><a href="<?php echo base_url();?>index.php/Creportes/view/repor_lrecolectada"><i class="fa fa-angle-double-right">
                    </i>Reporte de Leche Recolectada </a></li>
                    <li><a href="<?php echo base_url();?>index.php/Creportes/view/repor_lconsumida"><i class="fa fa-angle-double-right">
                     </i> Reporte de Leche Consumida</a></li>
                </ul>
            </li>

            <!--fin reportes -->
             
            <!-- usuarios  --> 

                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Administrar Usuario</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/clogin/view/registrarUsuario"><i class="fa fa-angle-double-right">
                    </i>Registrar Nuevo Usuario </a></li>
                    <li><a href="<?php echo base_url();?>index.php/clogin/view/verTodosLosUsuarios"><i class="fa fa-angle-double-right">
                    </i>Todos Usuarios </a></li>
                   
                </ul>

            </li><!-- fin usuarios  -->  

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>