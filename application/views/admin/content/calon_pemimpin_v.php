<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <section class="panel">
                  <div class="panel-body">
                      <div class="pro-sort">
                          <a href="<?php echo base_url(); ?>admin/home_admin/tambah_pemimpin"><button type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Baru </button></a>
                      </div>                      

                      <div class="pull-right">
                          
                      </div>
                  </div>
              </section>              
              <!--state overview start-->
              <div class="row product-list">
              <?php  
                  foreach ($query->result() as $row) 
                  {
                    if (empty($row->photo)) {
                      $photo = "default.gif";
                    }else{
                      $photo = $row->photo;
                    }
                  echo"
                    ".'
                    <div class="col-md-4">                    
                        <section class="panel">
                            <div class="pro-img-box">
                                <img src="'.site_url('assets/img/photo/'.$photo).'" alt=""/>
                                <a href="'.site_url('admin/home_admin/profile/'.$row->id_calon.'').'" class="adtocart">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>

                            <div class="panel-body text-center">
                                <h4>
                                    <a href="#" class="pro-title">
                                        '.strtoupper($row->nama_calon).'
                                    </a>
                                </h4>
                                <p class="price">'.$row->nama_jurusan.'</p>
                            </div>
                        </section>
                    </div>                             
                    '."
                    ";
                  }
                ?>                    
                
              
            </div>
              <!--state overview end-->

              </div>
              </div>

          </section>
      </section>