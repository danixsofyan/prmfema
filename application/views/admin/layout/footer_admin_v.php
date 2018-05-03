      <footer class="site-footer">
          <div class="text-center" style="padding-left: 220px;">
              &copy; <?php echo(date('Y').' Dafas Corp.') ?>
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl.carousel.js" ></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.customSelect.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/js/respond.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/ckeditor/ckeditor.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/count.js"></script>

    <!--this page plugins-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-daterangepicker/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>

    <script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>assets/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/assets/data-tables/DT_bootstrap.js"></script>

    <!--this page  script only-->
    <script src="<?php echo base_url(); ?>assets/js/advanced-form-components.js"></script>

    <script src="<?php echo base_url(); ?>assets/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/gritter/js/jquery.gritter.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jquery-knob/js/jquery.knob.js"></script>

    <script type="text/javascript">
      $(".knob").knob();
        <?php   if ($this->session->flashdata('pesan')) { ?>
                    var unique_id = $.gritter.add({
                        // (string | mandatory) the heading of the notification
                        title: '<?=$this->session->flashdata("judul")?>',
                        // (string | mandatory) the text inside the notification
                        text: '<?=$this->session->flashdata("pesan")?>',
                        // (int | optional) the time you want it to be alive for before fading out
                        // time: '',
                        // (string | optional) the class name you want to apply to that specific message
                        // class_name: 'my-sticky-class'
                    });

                    setTimeout(function(){

                     $.gritter.remove(unique_id, {
                     fade: true,
                     speed: 'slow'
                     });

                     }, 6000)
        <?php   } 
            if (isset($dataGrafik)) {
              echo($dataGrafik);
            }
        ?>
    </script>

    <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
        autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

    </script>

    <script>

        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
          autoPlay:true

            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

    </script>

    <script>

        $(document).ready(function() {
            $('#example').dataTable( {
                "pageLength": 25,
                "aaSorting": [[ 0, "asc" ]],
                "language": {
                    // "info": "Halaman _PAGE_ dari _PAGES_",
                    "info": "",
                    "infoEmpty": "",
                    "emptyTable": "Data tidak ditemukan.",
                    "lengthMenu": "_MENU_ data per halaman",
                    "paginate": {
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya",
                        "last": "Akhir",
                        "first": "Awal"
                    }
                }
            } );
        } );

        //owl carousel

        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
  			  autoPlay:true

            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

        <?php 
          if (isset($total_calon)) {
            echo "countUp(".$total_calon.");";
          }

          if (isset($total_pemilih)) {
            echo "countUp2(".$total_pemilih.");";
          }

          if (isset($total_pemilih_1)) {
            echo "countUp3(".$total_pemilih_1.");";
          }

          if (isset($total_pemilih_0)) {
            echo "countUp4(".$total_pemilih_0.");";
          }
        ?>
    </script>

  </body>
</html>