 </div>

        <!-- jQuery 2.0.2 -->
        
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url()?>assets/vendors/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url()?>assets/vendors/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="<?php echo base_url()?>assets/vendors/raphael.js"></script>
        <script src="<?php echo base_url()?>assets/vendors/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/vendors/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/vendors/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- date-range-picker -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/vendors/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/vendors/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/vendors/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url()?>assets/vendors/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url()?>assets/vendors/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url()?>assets/vendors/AdminLTE/demo.js" type="text/javascript"></script>

        <script src="<?php echo base_url()?>assets/vendors/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- bootstrap color picker -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
        <!-- bootstrap time picker -->
        <script src="<?php echo base_url()?>assets/vendors/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
        
        <script type="text/javascript">
            $(function() {
                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
                //Date range as a button
                $('#daterange-btn').daterangepicker(
                        {
                            ranges: {
                                'Today': [moment(), moment()],
                                'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                                'Last 7 Days': [moment().subtract('days', 6), moment()],
                                'Last 30 Days': [moment().subtract('days', 29), moment()],
                                'This Month': [moment().startOf('month'), moment().endOf('month')],
                                'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                            },
                            startDate: moment().subtract('days', 29),
                            endDate: moment()
                        },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
                );

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal',
                    radioClass: 'iradio_minimal'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>

         <!--esto es la busqueda y ordenamiento de la tablas en los "ver"-->
        <script type="text/javascript">
            (function() {
                $('#example1').dataTable(
                   {
                   "aaSorting": [[0,"desc"]]
                 
                }

                );
                     
            })();
        </script>
         <!--esto es la busqueda y ordenamiento de la cuando  utiliza fechas-->
        <script type="text/javascript">
            (function() {
                $('#example2').dataTable(
                   {
                   "aaSorting": [[0,"asc"]]
                 
                }

                );
                     
            })();
        </script>
         
        <!-- fin de la busqueda -->
        <script type="text/javascript">
         $(function () {
            var dateOffSet= (24*60*60*1000) *3650;
            var myDate= new Date();
            myDate.setTime(myDate.getTime() - dateOffSet)
             $('#datetimepicker10').datetimepicker({ locale: 'es',
              viewMode: 'years', format: 'DD/MM/YYYY',  maxDate: ( myDate)  });
         });
        </script>
         <script type="text/javascript">
           $(function () {
               $('#datetimepicker1').datetimepicker({ locale: 'es', format: 'DD/MM/YYYY' });
           });
        </script>
         <script type="text/javascript">
           $(function () {
               $('#datetimepicker2').datetimepicker({ locale: 'es', format: 'DD/MM/YYYY', maxDate: new Date() });
           });
        </script>
        

        <script type="text/javascript">
           $(function () {
               $('#datetimepickerPe').datetimepicker({ locale: 'es', format: 'DD-MM-YYYY' });
               $('#datetimepickerPa').datetimepicker({ locale: 'es', format: 'DD-MM-YYYY' });
           });
        </script>
        
<script type="text/javascript">
         $(function () {
            var dateOffSet= (24*60*60*1000) *10;
            var myDate= new Date();
            myDate.setTime(myDate.getTime() - dateOffSet)
             $('#datetimepicker3').datetimepicker({ locale: 'es',
               format: 'DD/MM/YYYY',  minDate: ( myDate), maxDate: new Date()  });
         });
        </script>
        <script type="text/javascript">
            function validarNum(e)
            {
                tecla = (document.all) ? e.keyCode : e.which;
                if (tecla == 8) return true;
                patron = /\d/;
                te = String.fromCharCode(tecla);
                return patron.test(te);
            }
        </script>
   
    </body>
</html>