      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">              
              <!--state overview start-->
              <?php
                  if (isset($query)){
                      foreach ($query->result_array() as $row) {

                      }
                      if (empty($row['photo'])) {
                        $photo = "default.gif";
                      }else{
                        $photo = $row['photo'];
                      }
                  }
              ?>
              <section class="panel">
                  <div class="panel-body">
                      <div class="col-md-6">
                          <div class="pro-img-details">
                              <img src="<?php echo site_url('assets/img/photo/'.$photo) ?>" alt=""/>
                          </div>                                  
                      </div>
                      <div class="col-md-6">
                          <h4 class="pro-d-title">
                              <a href="#" class="">
                                  <?php echo $row['nama_calon'] ?>
                              </a>
                          </h4>
                          <h5>
                          Jurusan : <?php echo $row['nama_jurusan'] ?>
                          <br> 
                          NRP : <?php echo $row['id_calon'] ?>
                          <br> 
                          Asal Kota : <?php echo $row['asal_kota'] ?>
                          </h5>
                          <p>
                              VISI <br>
                              <?php echo $row['visi'] ?>
                              <br>
                              <br>
                              MISI <br>  
                              <?php echo $row['misi'] ?>                          
                          <p>
                              <a href="<?php echo base_url(); ?>admin/home_admin/edit_pemimpin"><button class="btn btn-round btn-danger" type="button"><i class="fa fa-pencil"></i> Edit</button></a>
                              <a href="<?php echo base_url(); ?>admin/home_admin/delete_pemimpin"><button class="btn btn-round btn-danger" type="button"><i class="fa fa-trash-o"></i> delete</button></a>
                          </p>
                      </div>
                  </div>
              </section>              
              <!--state overview end-->
              </div>
              </div>

          </section>
      </section>
      <!--main content end-->
      </div>