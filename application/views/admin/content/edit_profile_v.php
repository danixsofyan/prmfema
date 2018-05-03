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
                              <li><a href="<?php echo site_url('admin/home_admin/profile/'.$row['id_calon']) ?>"> <i class="fa fa-user"></i> Profile</a></li>
                              <li class="active"><a href="<?php echo site_url('admin/home_admin/edit_profile/'.$row['id_calon']) ?>"> <i class="fa fa-edit"></i> Edit profile</a></li>
                              <li><a onclick="return confirm('yakin menghapus data ?')" href="<?php echo site_url('admin/home_admin/hapus_pemimpin/'.$row['id_calon']) ?>"> <i class="fa fa-trash-o"></i> Hapus </a></li>
                          </ul>

                      </section>
                  </aside>
                  <aside class="profile-info col-lg-8">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1> Edit Profile</h1>
                              <form action="<?php echo base_url(); ?>admin/home_admin/set_profile" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal" role="form"> 
                                  <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-2">Nrp</label>
                                        <div class="col-lg-10">
                                            <input placeholder="Nrp Calon Pemimpin" class=" form-control" name="id_calon" value="<?=$row['id_calon']?>" maxlength="9" type="text" readonly required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="nama" class="control-label col-lg-2">Nama</label>
                                        <div class="col-lg-10">
                                            <input placeholder="Nama Calon Pemimpin" class=" form-control" name="nama_calon" value="<?=$row['nama_calon']?>" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="bio" class="control-label col-lg-2">Jurusan</label>
                                        <div class="col-lg-10">
                                            <select name="id_jurusan" class="form-control m-bot15">
                                            <?php  
                                              foreach ($query1->result() as $row1)
                                              {
                                                if ($row1->id_jurusan == $row['id_jurusan']) {
                                                  $tampil = "selected";
                                                }else{
                                                  $tampil = "";
                                                }
                                              echo"                                                  
                                                <option value=\"".$row1->id_jurusan."\" ".$tampil.">".$row1->nama_jurusan."</option>                                                  
                                                ";
                                              }
                                            ?>
                                            </select>
                                        </div>                                          
                                    </div>
                                    <div class="form-group ">
                                        <label for="twitter" class="control-label col-lg-2">Visi</label>
                                        <div class="col-lg-10">
                                            <input placeholder="visi" class=" form-control" name="visi" type="text" value="<?=$row['visi']?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="instagram" class="control-label col-lg-2">Misi</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control ckeditor" name="misi" rows="6"><?=$row['misi']?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="instagram" class="control-label col-lg-2">Asal Kota</label>
                                        <div class="col-lg-10">
                                            <input placeholder="Asal Kota" class=" form-control" name="asal_kota" type="text" value="<?=$row['asal_kota']?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="photo" class="control-label col-lg-2">Photo</label>
                                        <div class="col-md-9">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                    <?php
                                                        if (empty($row['photo'])){$photo = "no_image_200x150.gif";}else{$photo = 'photo/'.$row['photo'];}
                                                      ?>
                                                      <img src="<?php echo base_url().'assets/img/'.$photo; ?>" alt="" />
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                 <span class="btn btn-white btn-file">
                                                 <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Pilih Photo</span>
                                                 <span class="fileupload-exists"><i class="fa fa-undo"></i> Rubah Photo</span>
                                                 <input type="file" class="default" name="userfile"/>
                                                 </span>
                                                    <?php if (!empty($row['photo'])){ ?>
                                                        <a href="<?php echo base_url().'admin/home_admin/edit_profile/'.$row['id_calon'].'/photo'; ?>" class="btn btn-danger fileupload-new"><i class="fa fa-trash"></i> Hapus Photo</a>
                                                      <?php  } ?>
                                                    <a href="#" name="foto" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Hapus Photo</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-success">Save</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>
                  </aside>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->