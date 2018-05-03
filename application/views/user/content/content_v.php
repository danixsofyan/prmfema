<body>

    <!-- header -->
    <div class="headerprm" <?php if(!empty($warna))echo 'style="background-color:'.$warna.';"' ?>> 
        <div class="row text-center">
            <div class="col-lg-12">
                <h2><?=$judul?></h2>
                <p><?=$subjudul?></p>
                <p>PERIODE <?=$periode?></p>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- logo seru terus -->
    <div class="logo">
        <div class="col-md-4 col-md-offset-4">
            <img src="<?php echo base_url(); ?>/assets/img/logosupport/logo.jpg" style="height:100px; width:auto;">
        </div>
    </div>
    <!-- end logo seru terus -->

    <!-- content cagub -->
    <div class="content">       
        <!-- Page Content -->
        <div class="container">
            <!-- Team Members Row -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header"></h2>
                </div>
                <?php  
                  foreach ($query->result() as $row)
                  {
                    if (empty($row->photo)) {
                        $photo = "default.gif";
                    }else{
                        $photo = $row->photo;
                    }
                  echo'
                    <div class="col-lg-4 col-sm-6 text-center">
                        <div class="grid">
                            <figure class="effect-zoe">
                                <img src="'.site_url('/assets/img/photo/'.$photo).'" alt="img1" class="img-responsive img-thumbnail"/>
                                <figcaption>
                                    <h2 style="font-size:20px;">'.$row->nama_calon.'</h2>
                                    <p class="icon-links">
                                        <a href="#vote-'.$row->id_calon.'" data-toggle="modal" data-id="'.$row->id_calon.'"><span class="icon-heart" ></span></a>
                                        <a href="#visimisi-'.$row->id_calon.'" data-toggle="modal" data-id="'.$row->id_calon.'"><span class="icon-eye"></span></a>
                                    </p>
                                    <p class="description">'.$texthover.' '.$row->nama_jurusan.'</p>
                                </figcaption>           
                            </figure>
                        </div>
                    </div>
                    ';
                  }
                ?>
            </div>
            <hr>
        </div>
        <!-- /.container -->
    </div>
    <!-- end content cagub -->

    <!-- logo km-ft -->
    <div class="logokmft">
        <div class="col-md-6 col-md-offset-3 col-xs-12 text-center">
            <p>Supported by:</p>
            <img src="<?php echo base_url('/assets/img/logosupport/'.$logosupport); ?>" class="img-responsive img-center" style="height:auto; !important;"/>            
        </div>        
    </div>
    <!-- end logo km-ft -->
    <?php
        if (isset($query)){
            foreach ($query->result_array() as $row1) {
                if (empty($row1['photo'])) {
                    $photo1 = "default.gif";
                }else{
                    $photo1 = $row1['photo'];
                }
    ?> 
    <!-- Modal visi misi-->
    <div class="modal fade" id="visimisi-<?php echo $row1['id_calon'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" <?php if(!empty($warna))echo 'style="background-color:'.$warna.';"' ?>>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title text-center" id="myModalLabel"><?php if(!empty($judulmodal))echo $judulmodal; ?></h4>
          </div>
          <div class="modal-body">
            <ul class="media-list">
                <li class="media">
                  <a class="pull-right" href="#">
                    <img class="media-object img-rounded" src="<?php echo base_url('/assets/img/photo/'.$photo1); ?>" style="width: 120px; height: 150px;">
                  </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo strtoupper($row1['nama_calon']) ?></h4>
                        <p>
                        Jurusan : <?php echo $row1['nama_jurusan'] ?>
                        <br>
                        No Urut     : <?php echo $row1['id_calon'] ?>
                        <br>
                        Asal Kota : <?php echo $row1['asal_kota'] ?>
                        </p>
                    </div>
                </li>
            </ul>
            <hr>
            <h1 class="text-center">Visi</h1>
            <?php echo $row1['visi'] ?>
            <h1 class="text-center">Misi</h1>
            <?php echo $row1['misi'] ?>
          </div>
          <div class="modal-footer">
            <?php if(!empty($subjudulmodal))echo $subjudulmodal; ?>
          </div>          
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- end modal visimisi -->

    <!-- modal vote -->
    <div id="vote-<?php echo $row1['id_calon'] ?>" class="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" <?php if(!empty($warna))echo 'style="background-color:'.$warna.';"' ?>>
                <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                 <h3>Konfirmasi</h3>
            </div>
            <div class="modal-body">
                 <p>Apakah anda yakin akan memilih calon pemimpin bernama <strong><?php echo strtoupper($row1['nama_calon']); ?></strong> ?</p>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            <a href="<?php echo base_url(); ?>user/home_user/vote/<?php echo $row1['id_calon'] ?>" type="button" class="btn btn-primary">Ya</a>
            </div>
          </div>
        </div>
    </div>

    <?php
    }
}
     ?>
    <!-- end modal vote -->