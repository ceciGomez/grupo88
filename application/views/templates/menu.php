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
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' 
                    class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="<?php echo base_url();?>index.php/page/view">
                    <i class="fa fa-dashboard"></i> <span>Pagina Principal</span>
                </a>
            </li>
            <!-- Consentimiento y submenu -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Consentimiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url();?>index.php/page/view/serologia"><i class="fa fa-angle-double-right">
                    </i>Registrar Serología </a></li>
                    <li><a href="<?php echo base_url();?>index.php/page/view/donante"><i class="fa fa-angle-double-right">
                    </i> Donante</a></li>
                    <li><a href="<?php echo base_url();?>index.php/page/view/bebeasociado"><i class="fa fa-angle-double-right">
                    </i> Bebe Asociado </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right">
                    </i> Centros </a></li>
                </ul>
            </li>
            <li>

            <!-- Hoja de Ruta y menu -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Hoja de Ruta</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right">
                    </i> Generar Hoja de Ruta </a></li>
                    <li><a href="pages/tables/empty.html"><i class="fa fa-angle-double-right">
                    </i> Registrar Ingreso de Frasco </a></li>
                    <li><a href="pages/tables/empty.html"><i class="fa fa-angle-double-right">
                    </i> Imprimir etiquetas de Frascos</a></li>
                </ul>
            </li>
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Frasco (analisis)</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/empty.html"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Acidez</a></li>
                    <li><a href="pages/tables/empty.html"><i class="fa fa-angle-double-right">
                    </i> Registrar Resultados de Hematocritos</a></li>
                    
                </ul>
            <!-- Fraccionamiento -->
             <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Fraccionamiento</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right">
                    </i> Registrar Fraccionamiento </a></li>
                    <li><a href="pages/tables/empty.html"><i class="fa fa-angle-double-right">
                    </i> Registrar Consumo de Bebe Receptor</a></li>
                    <li><a href="pages/tables/empty.html"><i class="fa fa-angle-double-right">
                    </i> Administrar Bebes Receptores</a></li>
                    <li><a href="pages/tables/empty.html"><i class="fa fa-angle-double-right">
                    </i> Ingresar Prescripción Médica</a></li>
                </ul>
            </li>

            <!-- Calendario --> 
            <li>
                <a href="<?php echo base_url();?>index.php/page/view/calendar">
                    <i class="fa fa-calendar"></i> <span>Calendario</span>
                    <small class="badge pull-right bg-red">3</small>
                </a>
            </li>
            <!-- Mail
            <li>
                <a href="pages/mailbox.html">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="badge pull-right bg-yellow">12</small>
                </a>
            </li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>