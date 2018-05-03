      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">              
              <!--state overview start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Pengaturan
                          </header>
                          <div class="panel-body">
                              <div class=" form">
                                <form action="<?php echo base_url(); ?>admin/home_admin/set_pengaturan" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="cmxform form-horizontal tasi-form"> 
                                      <input type="hidden" name="id" value="<?=$id?>">
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Judul</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Judul" class="form-control" name="judul" value="<?=$judul?>"  type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Subjudul</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Subjudul" class="form-control" name="subjudul" value="<?=$subjudul?>" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Judul Modal</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Judul Modal" class="form-control" name="judulmodal" value="<?=$judulmodal?>"  type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Subjudul Modal</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Subjudul Modal" class="form-control" name="subjudulmodal" value="<?=$subjudulmodal?>" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Judul Pemenang</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Judul Pemenang" class="form-control" name="judulpemenang" value="<?=$judulpemenang?>" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="nama" class="control-label col-lg-2">Text Hover Photo Calon</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Text Hover Photo Calon Di Home User" class="form-control" name="texthover" value="<?=$texthover?>" type="text"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="twitter" class="control-label col-lg-2">Periode</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Periode" class="form-control" name="periode" value="<?=$periode?>" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="instagram" class="control-label col-lg-2">Logo Admin</label>
                                          <div class="col-lg-10">
                                              <input placeholder="Logo admin atas" class="form-control" name="logoadmin" value="<?=$logoadmin?>" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="instagram" class="control-label col-lg-2">Warna</label>
                                          <div class="col-md-3 col-xs-11">
                                              <div data-color-format="rgb" data-color="<?=$warna?>" class="input-append colorpicker-default color">
                                                  <input name="warna" type="text" readonly="" value="<?=$warna?>" class="form-control">
                                                  <span class=" input-group-btn add-on">
                                                      <button class="btn btn-white" type="button" style="padding: 8px">
                                                      <i style="background-color: <?=$warna?>;"></i>
                                                      </button>
                                                  </span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="photo" class="control-label col-lg-2">Logo</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <?php
                                                        if (empty($logo)){$logo1 = "no_image_200x150.gif";}else{$logo1 = 'logo/'.$logo;}
                                                        if (empty($logosupport)){$logosupport1 = "no_image_200x150.gif";}else{$logosupport1 = 'logosupport/'.$logosupport;}
                                                      ?>
                                                      <img src="<?php echo base_url().'assets/img/'.$logo1; ?>" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Pilih Photo</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Rubah Photo</span>
                                                   <input type="file" class="default" name="logo"/>
                                                   </span>
                                                    <?php if (!empty($logo)){ ?>
                                                      <a href="<?php echo base_url().'admin/home_admin/pengaturan/'.$id.'/logo'; ?>" class="btn btn-danger fileupload-new"><i class="fa fa-trash"></i> Hapus Photo</a>
                                                    <?php  } ?>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Hapus Photo</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group ">
                                          <label for="photo" class="control-label col-lg-2">Logo Support</label>
                                          <div class="col-md-9">
                                              <div class="fileupload fileupload-new" data-provides="fileupload">
                                                  <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                      <img src="<?php echo base_url().'assets/img/'.$logosupport1; ?>" alt="" />
                                                  </div>
                                                  <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                  <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Pilih Photo</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Rubah Photo</span>
                                                   <input type="file" class="default" name="logosupport"/>
                                                   </span>
                                                      <?php if (!empty($logosupport)){ ?>
                                                        <a href="<?php echo base_url().'admin/home_admin/pengaturan/'.$id.'/logosupport'; ?>" class="btn btn-danger fileupload-new"><i class="fa fa-trash"></i> Hapus Photo</a>
                                                      <?php  } ?>
                                                      <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Hapus Photo</a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" name="submit" value="Simpan" class="btn btn-primary"/>
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