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
                    <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento"><i class="fa fa-angle-double-right">
                    </i>Registrar Consentimiento </a></li>
                    <!--Serologia -->
                    <li><a href="<?php echo base_url();?>index.php/cserologia/view/registrarSerologia"><i class="fa fa-angle-double-right">
                    </i>Registrar Serología </a></li>
                    <!--Serologia -->
                    <li><a href="<?php echo base_url();?>index.php/cserologia/view/verSerologias"><i class="fa fa-angle-double-right">
                    </i>Ver Serologías </a></li>
                    <!--Registrar donantes -->
                    <li><a href="<?php echo base_url();?>index.php/cdonante/view/registrarDonante"><i class="fa fa-angle-double-right">
                    </i> Registrar Donante</a></li>
                    <li><a href="<?php echo base_url();?>index.php/cdonante/view/verDonantes"><i class="fa fa-angle-double-right">
                    </i> Ver Donantes</a></li>
                    <li><a href="<?php echo base_url();?>index.php/cbebe/view/bebeAsociado"><i class="fa fa-angle-double-right">
                    </i> Bebe Asociado </a></li>
                    <li><a href="<?php echo base_url();?>index.php/page/view/centroRecoleccion"><i class="fa fa-angle-double-right">
                    </i> Centros de Recolección</a></li>
                </ul>
            </li>
            <li>
                 <li class="treeview">
                <a href="#">
                    <i class="fa fa-random"></i> <span>Pasteurización</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i>Registrar Nueva Pasteurización </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i>Administrar Biberones </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Cultivo</a></li>
                   
                </ul>
            </li>
            <li>

            <!-- Hoja de Ruta y menu   --> 
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-map-marker"></i> <span>Hoja de Ruta</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Generar Hoja de Ruta </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Ingreso de Frascos </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Imprimir etiquetas de Frascos</a></li>
                </ul>          
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-bitbucket"></i> <span>Frascos (analisis)</span>
                    <i class="fa fa-angle-left pull-right"></i><i class=""></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Acidez</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Hematocritos</a></li>
                    
                </ul>
            <!-- Fraccionamiento -->
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-stack-overflow"></i> <span>Fraccionamiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Fraccionamiento </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Registrar Consumo de Bebe Receptor</a></li>
                    <!--Administrar bebe receptores -->
                    <li><a href="<?php echo base_url();?>index.php/cbebe/view/bebeReceptor"><i class="fa fa-angle-double-right">
                    </i> Administrar Bebés Receptores</a></li>
                    
                    <li><a href="#
                    "><i class="fa fa-angle-double-right">
                    </i> Ingresar Prescripción Médica</a></li>
                </ul>
            </li>
             <li class="active">
               <a href="#">
                    <i class="fa fa-flask"></i> <span>Stock</span>
                   
                </a>
            </li>
            <li class="active">
                <a href="#">
                    <i class="fa fa-file-text-o"></i> <span>Informes</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>