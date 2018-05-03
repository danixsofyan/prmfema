	<!-- content cagub -->
    <div class="content">       
        <!-- Page Content -->
        <div class="container">
            <!-- Team Members Row -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h2 class="page-header"><center><?=$judulpemenang?> <?=$periode?><center></h2> <!-- dianamiskeun-->
                </div>               
                <br>
                <br>
                <br>
                <?php 
                    foreach ($query->result() as $row) {
                        echo '
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
                                <div class="grid">
                                    <figure class="effect-zoe">
                                        <img src="'.base_url().'assets/img/photo/'.$row->photo.'" alt="pemenang" class="img-responsive img-thumbnail"/>
                                        <figcaption style="height:85px;">
                                            <center><h2 style="font-size:25px;text-align:center;width:100%;"> '.strtoupper($row->nama_calon).' <br><span style="font-size:20px;"> ( '.$row->nama_jurusan.' ) </span> </h2></center>
                                        </figcaption>           
                                    </figure>
                                </div>
                            </div>
                        ';  
                    }
                ?>
                <hr>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Grafik Kemenangan
                        </header>
                        <div class="panel-body">
                            <div id="hero-bar" class="graph"></div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- end content cagub -->