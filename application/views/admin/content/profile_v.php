<!--main content start-->
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
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-4">
                      <section class="panel">
                          <div class="user-heading round">
                              <a href="#">
                                  <img src="<?php echo site_url('assets/img/photo/'.$photo) ?>" alt="" style="width:150px; height:150px;">
                              </a>
                              <h1><?php echo strtoupper($row['nama_calon']) ?></h1>
                              <p><?php echo $row['nama_jurusan'] ?></p>
                              <p><?php echo $row['id_calon'] ?></p>
                              <p><?php echo $row['asal_kota'] ?></p>
                          </div>

                          <ul class="nav nav-pills nav-stacked">
                              <li class="active"><a href="<?php echo site_url('admin/home_admin/profile/'.$row['id_calon']) ?>"> <i class="fa fa-user"></i> Profile</a></li>
                              <li><a href="<?php echo site_url('admin/home_admin/edit_profile/'.$row['id_calon']) ?>"> <i class="fa fa-edit"></i> Edit profile</a></li>
                              <li><a onclick="return confirm('yakin menghapus data ?')" href="<?php echo site_url('admin/home_admin/hapus_pemimpin/'.$row['id_calon']) ?>"> <i class="fa fa-trash-o"></i> Hapus </a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-8">
                      <section class="panel">
                          <div class="bio-graph-heading">
                              <?php echo $row['visi'] ?>
                          </div>
                          <div class="panel-body bio-graph-info">
                              <h1>MISI</h1>
                              <?php echo $row['misi'] ?> 
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->