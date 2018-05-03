	<!-- content cagub -->
    <div class="content">       
        <!-- Page Content -->
        <div class="container" style="min-height:650px;">
            <!-- Team Members Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"><center><?=$judulpemenang?> <?=$periode?><center></h2> <!-- dianamiskeun-->
                </div>               
                <?php 
                    foreach ($query->result() as $row) {
                        echo '
                            <div class="col-lg-4 col-sm-4 text-center">
                                <div class="grid">
                                    <figure class="effect-zoe">
                                        <img src="'.base_url().'assets/img/photo/'.$row->photo.'" alt="pemenang" class="img-responsive img-thumbnail"/>
                                        <figcaption>
                                            <h2 style="font-size:25px;">'.strtoupper($row->nama_calon).'</h2>
                                        </figcaption>           
                                    </figure>
                                    <h2 style="text-align:center;"> '.strtoupper($row->nama_calon).' <br><span style="font-size:20px;"> ( '.$row->nama_jurusan.' ) </span> </h2>
                                </div>
                            </div>
                        ';  
                    }
                ?>
                <div class="col-md-8 col-sm-8">
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
            <!-- <hr> -->
        </div>
        <!-- /.container -->
    </div>
    <!-- end content cagub -->