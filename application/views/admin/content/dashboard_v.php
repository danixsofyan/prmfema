<!--main content start-->
      <section id="main-content">
          <section class="wrapper">              
              <!--state overview start-->
              <div class="row state-overview">
                  <div class="col-lg-8 col-sm-8">
                    <div class="col-sm-12">
                      <div class="col-lg-6 col-sm-6" style="padding-left:0;">
                          <section class="panel">
                              <div class="symbol terques">
                                  <i class="fa fa-user"></i>
                              </div>
                              <div class="value">
                                  <h1 class="count">
                                      0
                                  </h1>
                                  <p>Calon Pemimpin</p>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6 col-sm-6" style="padding-right:0;">
                          <section class="panel">
                              <div class="symbol red">
                                  <i class="fa fa-group"></i>
                              </div>
                              <div class="value">
                                  <h1 class=" count2">
                                      0
                                  </h1>
                                  <p>Total User</p>
                              </div>
                          </section>
                      </div>
                    </div>
                    <div class="col-sm-12">
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
                  <div class="col-sm-4">
                    <div class="col-sm-12">
                      <!-- <div class="col-lg-6 col-sm-6" style="padding-left:0;">
                          <section class="panel">
                              <div class="symbol yellow">
                                  <i class="fa fa-user-md"></i>
                              </div>
                              <div class="value">
                                  <h1 class="count3">
                                      0
                                  </h1>
                                  <p>User Terpakai</p>
                              </div>
                          </section>
                      </div>
                      <div class="col-lg-6 col-sm-6" style="padding-right:0;">
                          <section class="panel">
                              <div class="symbol blue">
                                  <i class="fa fa-user-md"></i>
                              </div>
                              <div class="value">
                                  <h1 class=" count4">
                                      0
                                  </h1>
                                  <p>User Tidak Terpakai</p>
                              </div>
                          </section>
                      </div> -->
                    </div>
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Daftar Calon Pemimpin
                            </header>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jurusan</th>
                                    <th>Total Vote</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php  
                                foreach ($query->result() as $row)
                                {
                                  if (!isset($jumlahPilih[$row->id_calon])) {
                                    $jumlahPilih[$row->id_calon] = 0;
                                  }
                                echo"
                                  <tr>
                                      <td>".strtoupper($row->nama_calon)."</td> 
                                      <td>".$row->nama_jurusan."</td> 
                                      <td align=\"center\">".$jumlahPilih[$row->id_calon]."</td>
                                      <td>".'
                                      <a href="'.site_url('admin/home_admin/profile/'.$row->id_calon.'').'"><button class="btn btn-danger btn-circle btn-outline" type="button" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-search"></i>
                                      </button></a>                            
                                      '."</td>                                        
                                  </tr>
                                  ";
                                }
                              ?>
                                </tbody>
                            </table>
                        </section>
                    </div> 
                  </div>
              </div>
              <!--state overview end-->

          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>