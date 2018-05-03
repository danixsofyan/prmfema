      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">              
              <!--state overview start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Form Tambah Pemimpin
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                <form action="<?php echo base_url(); ?>admin/home_admin/upload_calon" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="cmxform form-horizontal tasi-form"> 
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Nrp</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Nrp Calon Pemimpin" class=" form-control" name="id_calon" maxlength="9" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Nama</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Nama Calon Pemimpin" class=" form-control" name="nama_calon" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="bio" class="control-label col-lg-2">Jurusan</label>
                                          <div class="col-lg-10">
                                              <select name="id_jurusan" class="form-control m-bot15">
                                              <option>- Pilih jurusan -</option>
                                              <?php  
                                                foreach ($query->result() as $row)
                                                {
                                                echo"                                                  
                                                  <option value=".$row->id_jurusan.">".$row->nama_jurusan."</option>                                                  
                                                  ";
                                                }
                                              ?>
                                              </select>
                                          </div>                                          
                                      </div>
                                      <div class="form-group ">
                                          <label for="twitter" class="control-label col-lg-2">Visi</label>
                                          <div class="col-lg-10">
                                              <input placeholder="visi" class=" form-control" name="visi" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="instagram" class="control-label col-lg-2">Misi</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control ckeditor" name="misi" rows="6"></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="instagram" class="control-label col-lg-2">Asal Kota</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Asal Kota" class=" form-control" name="asal_kota" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="photo" class="control-label col-lg-2">Photo</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Pilih Photo</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Rubah Photo</span>
                                                   <input type="file" class="default" name="userfile"/>
                                                   </span>
                                                      <a href="#" name="foto" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Hapus Photo</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" value="upload" class="btn btn-primary"/>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->

              </div>
              </div>

          </section>
      </section>