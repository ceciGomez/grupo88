<aside class="right-side">
  <section class="content-header col-md-12">
    <ol class="breadcrumb">
       <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
       <li><a href="#">Consentimiento</a></li>
       <li class="active">Registrar Consentimientos </li>
    </ol>
    <h1>Listado de madres donantes activas en un periodo</h1>
  </section>  <!-- fin section header -->
  <section class="content col-md-12" >
  </section> 

<section>
   <table width='40%'  cellspacing='0' cellpadding='0' style='font-size:15px' bgcolor='FDFEFE' border='0' align='left'>
   <tr> 
   <td> 
   <img src='/blh2/images/logo.png' alt='' width='150' height='50' class='alignright' align='left'/> 
   </td> 
   <td>FECHA: // </td> 
  echo date("d-m-Y");
   </td> 
   <td>Usuario: // </td> 
   Eric 
   </td> 
   </tr> 
   </table> 
  <br><br> 
/////////////////////
   <table width='40%'  cellspacing='0' cellpadding='0' style='font-size:15px' bgcolor='FDFEFE' border='0' align='center'> 
   <tr> 
   <td> 
//  <input style=' background-image:url(../images/Print.png);' type='button' align='center' class='nover' name='imprimir' value='IMPRIMIR'  onClick='window.print()' ;/> 
    <button type='submit' align='center' class='nover' name='imprimir' value=''  onClick='window.print()' ;><img src='../images/Print.png'/> </button> 
  
   </td> //style='margin:0px auto; display:block'
 //  <br></br> 
   <td> 
 //  <input type='button' align='center' class='nover' name='salir' value='Salir' onClick='history.back()' ;/> //style='margin:0px auto; display:block'
   <button type='submit' align='center' class='nover' name='salir' value='' onClick='history.back()'>
<img src='../images/back.png'/> </button>  ; 
   </td> 
   </tr> 
   </table> 
///////////////////////
   <br></br> 
   <table width='70%'  cellspacing='0' cellpadding='0' style='font-size:15px' bgcolor='FDFEFE' border='1' align='center'> 
   <strong><caption>LISTADO DE  DE MADRES DONANTES</caption></strong> 
   <tr bgcolor='#CCCCCC'> 
   <td width='15%'><b>NRO-DONANTE</<b></b>></td> 
   <td><b>APELLIDO</b></td> 
   <td><b>NOMBRE</b></td> 
   <td><b>DNI</b></td>
   <td><b>DESDE</b></td>
   <td><b>HASTA</b></td>
      </tr> 
    while ($row = mysqli_fetch_array($rs)){
       <tr> 
       <td width='15%' align='center'>".$row['nroDonante']."</td> 
       <td>".$row['apellido']."</td> 
       <td>".$row['nombre']."</td> 
       <td>".$row['dniDonante']."</td> 
       <td>".$row['fechaDesde']."</td> 
       <td>".$row['fechaHasta']."</td> 
       </tr> $madresactivas++; 
       }
     </table> 
     <br><br> 
    echo"<div class='row'>
     <strong><div class='col-md-2' align='center'>
    TOTAL DONANTES ACTIVAS:<input type='text' style='border:none; 
    background-color:transparent; ' readonly='readonly' 
    value='".$madresactivas."'></div></strong></div> 

  
</section>
</aside>