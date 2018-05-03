    <!-- Footer -->
    <div class="footer" <?php if(isset($warna))echo 'style="background-color:'.$warna.';"' ?>>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12 text-center">
                    <p>&copy; Copyright <a href="#" target="blank"><a href="http://seruterus.com" target="blank_">Seru Terus</a> <?=date('Y')?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/morris.js-0.4.3/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/morris.js-0.4.3/raphael-min.js" type="text/javascript"></script>

    <script type="text/javascript">
        <?php 
            if (isset($dataGrafik)) {
              echo($dataGrafik);
            }
        ?>
    </script>

</body>
</html>